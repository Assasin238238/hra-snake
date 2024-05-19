const board = document.getElementById('game-board');
const instructionText = document.getElementById('instruction-text');
const score = document.getElementById('score');
const highScoreText = document.getElementById('highScore');

// Volume bar element
const volumeBar = document.getElementById('volume-bar');
const backgroundMusic = document.getElementById('background-music');

// Initial volume setting
let volume = 0.4;
const initialFilledSquares = Math.floor(volume * 10);

// Create volume squares
for (let i = 0; i < 10; i++) {
    const square = document.createElement('div');
    square.className = 'volume-square';
    if (i < initialFilledSquares) {
        square.classList.add('filled');
    }
    square.addEventListener('click', () => adjustVolume(i));
    volumeBar.appendChild(square);
}

// Adjust volume based on clicked square
function adjustVolume(index) {
    volume = (index + 1) / 10;
    if (volume === 0.1) {
        backgroundMusic.volume = 0;
    } else {
        backgroundMusic.volume = volume;
    }
    updateVolumeBar(index + 1);
}

// Update volume bar visual
function updateVolumeBar(filledSquares) {
    const squares = document.querySelectorAll('.volume-square');
    squares.forEach((square, index) => {
        square.classList.remove('max-volume', 'min-volume');
        if (index < filledSquares) {
            square.classList.add('filled');
        } else {
            square.classList.remove('filled');
        }
    });
    if (filledSquares === 10) {
        squares[9].classList.add('max-volume');
    } else if (filledSquares === 1) {
        squares[0].classList.add('min-volume');
    }
}

// Define game variables
const gridSize = 20;
let snake = [{ x: 10, y: 10 }];
let food = generateFood();
let highScore = 0;
let direction = 'right';
let directionQueue = [];
let gameInterval;
let gameSpeedDelay = 200;
let gameStarted = false;

// Draw game map, snake, food
function draw() {
  board.innerHTML = '';
  drawSnake();
  drawFood();
  updateScore();
}

// Draw snake
function drawSnake() {
  snake.forEach((segment) => {
    const snakeElement = createGameElement('div', 'snake');
    setPosition(snakeElement, segment);
    board.appendChild(snakeElement);
  });
}

// Create a snake or food cube/div
function createGameElement(tag, className) {
  const element = document.createElement(tag);
  element.className = className;
  return element;
}

// Set the position of snake or food
function setPosition(element, position) {
  element.style.gridColumn = position.x;
  element.style.gridRow = position.y;
}

// Draw food function
function drawFood() {
  if (gameStarted) {
    const foodElement = createGameElement('div', 'food');
    setPosition(foodElement, food);
    board.appendChild(foodElement);
  }
}

// Generate food
function generateFood() {
  let newFood;
  do {
    newFood = {
      x: Math.floor(Math.random() * gridSize) + 1,
      y: Math.floor(Math.random() * gridSize) + 1
    };
  } while (snake.some(segment => segment.x === newFood.x && segment.y === newFood.y));
  return newFood;
}

// Moving the snake
function move() {
  if (directionQueue.length > 0) {
    const newDirection = directionQueue.shift();
    if (!isOppositeDirection(newDirection)) {
      direction = newDirection;
    }
  }

  const head = { ...snake[0] };
  switch (direction) {
    case 'up':
      head.y--;
      break;
    case 'down':
      head.y++;
      break;
    case 'left':
      head.x--;
      break;
    case 'right':
      head.x++;
      break;
  }

  snake.unshift(head);

  // Check if the player has reached length 2
  if (snake.length - 1 === 2) {
    // Play the music
    backgroundMusic.volume = volume; // Set volume based on volume bar
    backgroundMusic.play();
  }

  // Check if the head collides with food
  if (head.x === food.x && head.y === food.y) {
    food = generateFood();
    increaseSpeed();
    clearInterval(gameInterval); // Clear past interval
    gameInterval = setInterval(() => {
      move();
      checkCollision();
      draw();
    }, gameSpeedDelay);
  } else {
    // Check if the player died
    if (checkDeath(head)) {
      // Stop the music
      backgroundMusic.pause();
      backgroundMusic.currentTime = 0; // Rewind the music to the beginning
    }
    snake.pop();
  }
}

// Function to check if the player died
function checkDeath(head) {
  // Check if the head is out of bounds or collides with the snake body
  return head.x < 1 || head.x > gridSize || head.y < 1 || head.y > gridSize || snake.slice(1).some(segment => segment.x === head.x && segment.y === head.y);
}

// Start game function
function startGame() {
  gameStarted = true; // Keep track of a running game
  instructionText.style.display = 'none';
  
  gameInterval = setInterval(() => {
    move();
    checkCollision();
    draw();
  }, gameSpeedDelay);
}

// Keypress event listener
function handleKeyPress(event) {
  if (!gameStarted) {
    startGame();
  } else {
    let newDirection;
    switch (event.key) {
      case 'ArrowUp':
      case 'w':
      case 'W':
        newDirection = 'up';
        break;
      case 'ArrowDown':
      case 's':
      case 'S':
        newDirection = 'down';
        break;
      case 'ArrowLeft':
      case 'a':
      case 'A':
        newDirection = 'left';
        break;
      case 'ArrowRight':
      case 'd':
      case 'D':
        newDirection = 'right';
        break;
    }
    if (newDirection && !isOppositeDirection(newDirection)) {
      directionQueue.push(newDirection);
    }
  }
}

function isOppositeDirection(newDirection) {
  const oppositeDirections = {
    'up': 'down',
    'down': 'up',
    'left': 'right',
    'right': 'left'
  };
  return oppositeDirections[direction] === newDirection;
}

document.addEventListener('keydown', handleKeyPress);

function increaseSpeed() {
  if (gameSpeedDelay > 150) {
    gameSpeedDelay -= 5;
  } else if (gameSpeedDelay > 100) {
    gameSpeedDelay -= 3;
  } else if (gameSpeedDelay > 50) {
    gameSpeedDelay -= 2;
  } else if (gameSpeedDelay > 25) {
    gameSpeedDelay -= 1;
  }
}

function checkCollision() {
  const head = snake[0];

  if (head.x < 1 || head.x > gridSize || head.y < 1 || head.y > gridSize) {
    resetGame();
  }

  for (let i = 1; i < snake.length; i++) {
    if (head.x === snake[i].x && head.y === snake[i].y) {
      resetGame();
    }
  }
}

function resetGame() {
  updateHighScore();
  stopGame();
  snake = [{ x: 10, y: 10 }];
  food = generateFood();
  direction = 'right';
  directionQueue = [];
  gameSpeedDelay = 200;
  updateScore();
}

function updateScore() {
  const currentScore = snake.length - 1;
  score.textContent = currentScore.toString().padStart(3, '0');
}

function stopGame() {
  clearInterval(gameInterval);
  gameStarted = false;
  instructionText.style.display = 'block';
}

function updateHighScore() {
  const currentScore = snake.length - 1;
  if (currentScore > highScore) {
    highScore = currentScore;
    highScoreText.textContent = highScore.toString().padStart(3, '0');
  }
  highScoreText.style.display = 'block';
}

/* Leaving website :( */
let docTitle = document.title;
window.addEventListener("blur", () => {
  document.title = "Come back!";
});

window.addEventListener("focus", () => {
  document.title = docTitle;
});

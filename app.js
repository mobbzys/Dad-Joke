// Gloabl

const tellJokeBtn = document.getElementById('tellMeADadJoke--btn');
const jokeSetup = document.getElementById('dad__joke--setup');
const iDontKnowBtn = document.getElementById('iDontKnow--btn');
const jokePunchline = document.getElementById('dad__joke--punchline');
const resetBtn = document.getElementById('reset--btn');


// Functions
function reveal(element) {
    element.style.display = "block";
}
function hide(element) {
    element.style.display = "hide";
}

// Btn to reveal Joke Setup
tellJokeBtn.addEventListener("click", () => {
    reveal(jokeSetup);    
})

// Punchline reaveals then they click on the 'I don't know button'
iDontKnowBtn.addEventListener("click", () => {
    reveal(jokePunchline);
})

// Button to reset the game
resetBtn.addEventListener("click", () => {
    resetJoke();
})

function resetJoke() { 
    hide(jokeSetup);
    reveal(tellJokeBtn);
    hide(jokePunchline);
}

hide(tellJokeBtn);
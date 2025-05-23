//Quote API requests are restricted to 5 per 30 second period (since it's using the free version)

async function getJoke() {
    const jokeBox = document.getElementById("jokeBox");
    jokeBox.textContent = "Loading joke...";

    try {
        const response = await fetch("https://v2.jokeapi.dev/joke/Any?format=json&safe-mode&type=single");
        const data = await response.json();

        if (data && data.joke) {
            jokeBox.innerHTML = `<p style="font-size: 18px;">${data.joke}</p>`;
        } else {
            jokeBox.textContent = "No joke found. Try again!";
        }
    } catch (error) {
        jokeBox.textContent = "Couldn't load a joke. Try again.";
        console.error("Joke fetch error:", error);
    }
}

window.onload = getJoke;
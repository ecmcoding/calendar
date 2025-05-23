async function getPositiveQuote() {
    const newsBox = document.getElementById("newsBox");
    newsBox.textContent = "Loading quote...";

    try {
        const response = await fetch("../php/get-quote.php");
        const data = await response.json();
        const quote = data[0];

        newsBox.innerHTML = `
            <blockquote style="font-size: 18px; line-height: 1.6; font-style: italic;">
                “${quote.q}”
                <br><br>
                <footer><strong>— ${quote.a}</strong></footer>
            </blockquote>
        `;
    } catch (error) {
        newsBox.textContent = "Couldn't load a quote. Please try again.";
        console.error("Quote fetch error:", error);
    }
}

window.onload = getPositiveQuote;
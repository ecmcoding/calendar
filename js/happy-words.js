async function getPositiveQuote() {
    const quoteBox = document.getElementById("quoteBox");
    quoteBox.textContent = "Loading quote...";

    try {
        const response = await fetch("../php/get-quote.php");
        const data = await response.json();
        const quote = data[0];

        quoteBox.innerHTML = `
            <p style="font-size: 18px; line-height: 1.6; font-style: italic; margin: 0;">
                “${quote.q}”
                <br><br>
                <strong>— ${quote.a}</strong>
            </p>
            `;

    } catch (error) {
        quoteBox.textContent = "Couldn't load a quote. Please try again.";
        console.error("Quote fetch error:", error);
    }
}

window.onload = getPositiveQuote;
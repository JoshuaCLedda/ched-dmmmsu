function toggleForm() {
    const formSection = document.getElementById('form');
    const cardsSection = document.getElementById('cards');
    const toggleButton = document.getElementById('toggleButton');

    if (formSection.style.display === 'none') {
        // Show the form and hide the cards
        formSection.style.display = 'block';
        cardsSection.style.display = 'none';
        toggleButton.textContent = 'Back'; // Change button text to 'Back'
    } else {
        // Show the cards and hide the form
        formSection.style.display = 'none';
        cardsSection.style.display = 'block';
        toggleButton.textContent = 'Add Reference'; // Change button text to 'Add Reference'
    }
}

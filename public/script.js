document.addEventListener('DOMContentLoaded', () => {
    const button = document.getElementById('clickMe');
    const response = document.getElementById('response');

    button.addEventListener('click', () => {
        response.textContent = 'Hello from JavaScript! The project is working correctly.';
        console.log('Button clicked!');
    });
});

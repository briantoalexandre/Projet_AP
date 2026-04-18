//Teste
const boxes = document.querySelectorAll('.search-box');
const items = ["apple", "strawberry", "world"]

boxes.forEach(box => {
    const input = box.querySelector('.search-input');
    const results = box.querySelector('.results');

    input.addEventListener('input', function () {
        const value = this.value.toLowerCase();
        results.innerHTML = '';

        if (value === '') {
            results.style.display = 'none';
            return;
        }

        const filtered = items.filter(item =>
            item.toLowerCase().includes(value)
        );

        filtered.forEach(item => {
            const li = document.createElement('li');
            li.textContent = item;

            li.addEventListener('click', () => {
                input.value = item;
                results.style.display = 'none';
            });

            results.appendChild(li);
        });

        results.style.display = filtered.length ? 'block' : 'none';
    });

    input.addEventListener('focus', () => {
        if (results.innerHTML.trim() !== '') {
            results.style.display = 'block';
        }
    });
});

document.addEventListener('click', (e) => {
    document.querySelectorAll('.search-box').forEach(box => {
        if (!box.contains(e.target)) {
            const results = box.querySelector('.results');
            results.style.display = 'none';
        }
    });
});

document.querySelectorAll('.results').forEach(ul => {
    ul.addEventListener('mousedown', e => e.preventDefault());
});
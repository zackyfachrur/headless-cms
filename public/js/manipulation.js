function toggleFormPortfolio() {
    const portfolioForm = document.getElementById('form-portfolio-modal');
    portfolioForm.classList.toggle('hidden');
}

function toggleDemo(button) {
    const demoBox = button.nextElementSibling;
    const isHidden = demoBox.classList.contains('d-none');
    demoBox.classList.toggle('d-none');
    button.innerHTML = isHidden ?
        'Sembunyikan Akun Demo <i class="fas fa-eye-slash" style="font-size: 0.625rem;"></i>' :
        'Tampilkan Akun Demo <i class="fas fa-eye" style="font-size: 0.625rem;"></i>';
}

function toggleFormKarir() {
    const karirForm = document.getElementById('form-karir-modal');
    karirForm.classList.toggle('hidden');
}

function toggleCategoryOption() {
    const category = document.getElementById('category-group')
    category.classList.toggle('hidden');
}

function filterCategory(category) {
    const rows = document.querySelectorAll('#portfolio-row');

    rows.forEach(row => {
        const rowCategory = row.getAttribute('data-category');

        if (category === 'all' || rowCategory === category) {
            row.style.display = '';
        } else {
            row.style.display = 'none';
        }
    });
}


function togglePassword() {
    const toggleEye = document.getElementById('toggle-eye');
    const togglePassword = document.getElementById('password-admin');
    toggleEye.classList.toggle('fa-eye');
    toggleEye.classList.toggle('fa-eye-slash');

    togglePassword.type = togglePassword.type === 'password' ? 'text' : 'password';
}

function addField() {
    const container = document.getElementById('requirement-fields');

    const div = document.createElement('div');
    div.classList.add('flex', 'gap-2', 'mb-2');
    div.innerHTML = `
            <input type="text" name="job_requirements[]" class="w-full border-2 border-gray-400 rounded-lg bg-gray-50" placeholder="Masukkan syarat..." required>
            <button type="button" onclick="removeField(this)" class="px-2 font-bold text-red-500"><i
                        class="fas fa-close text-xs text-blue-500 hover:text-red-500 hover:opacity-100"></i></button>
        `;

    container.appendChild(div);
}

function removeField(button) {
    button.parentElement.remove();
}

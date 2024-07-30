document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('contactForm');

    form.addEventListener('submit', function(event) {
        event.preventDefault();
        
        clearErrorMessages();
        
        let isValid = true;
        
        const requiredFields = form.querySelectorAll('.required-field');
        requiredFields.forEach(function(field) {
            if (!validateField(field)) {
                isValid = false;
            }
        });
        
        if (isValid) {
            form.submit();
        }
    });

function validateField(field) {
    const fieldName = field.name;
    let errorMessage = '';

    if (field.type === 'checkbox') {
    if (!field.checked) {
        errorMessage = '個人情報保護方針に同意してください';
    }
    } else if (!field.value.trim()) {
        switch(fieldName) {
            case 'name':
            errorMessage = 'お名前を入力してください';
            break;
            case 'tel':
            errorMessage = '電話番号を入力してください';
            break;
            case 'email':
            errorMessage = 'メールアドレスを入力してください';
            break;
            default:
            errorMessage = 'この項目は必須です';
        }
    }

    if (errorMessage) {
        showError(field, errorMessage);
        return false;
    }
    return true;
}

function showError(field, message) {
    const errorElement = document.createElement('div');
    errorElement.className = 'error-message';
    errorElement.textContent = message;
    field.parentNode.appendChild(errorElement);
    field.classList.add('error');
}

function clearErrorMessages() {
    const errorMessages = form.querySelectorAll('.error-message');
    errorMessages.forEach(function(error) {
        error.remove();
    });
    
    const errorFields = form.querySelectorAll('.error');
    errorFields.forEach(function(field) {
        field.classList.remove('error');
    });
}
});
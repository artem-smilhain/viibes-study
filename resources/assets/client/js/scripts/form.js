document.addEventListener('DOMContentLoaded', () => {
    const ctaForms = document.querySelectorAll('.viibes__cta_main_form');
    const ctaNameInputs = document.querySelectorAll('.viibes__form_name');
    const ctaPhoneInputs = document.querySelectorAll('.viibes__form_phone');

    ctaForms.forEach((form, index) => {
        const ctaNameInput = ctaNameInputs[index];
        const ctaPhoneInput = ctaPhoneInputs[index];
        const iti = window.intlTelInput(ctaPhoneInput, {
            preferredCountries: ["by", "kz", "ua", "ru"],
            localizedCountries: {
                by: "Беларусь",
                kz: "Казахстан",
                ua: "Украина",
                ru: "Россия",
            },
            initialCountry: "auto",
            geoIpLookup: callback => {
                fetch("https://ipapi.co/json")
                    .then(res => res.json())
                    .then(data => callback(data.country_code))
                    .catch(() => callback("by"));
            },
            utilsScript: "/assets/client/js/libraries/intl-tel-input/utils.js",
            /*customPlaceholder: function(selectedCountryPlaceholder, selectedCountryData) {
                return '+' + selectedCountryData.dialCode + ' ' + selectedCountryPlaceholder;
            },*/
        });

        ctaPhoneInput.addEventListener('focus', function() {
            const value = ctaPhoneInput.value;
            if (!value) {
                const countryCode = iti.getSelectedCountryData().dialCode;
                ctaPhoneInput.value = `+${countryCode}`;
            } else if (!value.startsWith('+')) {
                ctaPhoneInput.value = `+${value}`;
            }
        });

        ctaPhoneInput.addEventListener('input', function() {
            const value = ctaPhoneInput.value.replace(/[+]+/g, '+'); // Убрать лишние плюсы
            ctaPhoneInput.value = value.startsWith('+') ? value : '+' + value;
        });

        ctaPhoneInput.addEventListener('input', () => {
            const originalValue = ctaPhoneInput.value;
            const filteredValue = originalValue.replace(/[^0-9+]/g, ''); // Оставить только цифры и плюс
            ctaPhoneInput.value = filteredValue;
            if (filteredValue.trim()) {
                if (iti.isValidNumber()) {
                    ctaPhoneInput.style.color = '#06B648';
                    ctaPhoneInput.style.boxShadow = 'inset 0 0 0 2px #06B648';
                    ctaPhoneInput.style.backgroundColor = '#06B6481A';
                } else {
                    ctaPhoneInput.style.color = '#c28b00';
                    ctaPhoneInput.style.boxShadow = 'inset 0 0 0 2px #E2A301';
                    ctaPhoneInput.style.backgroundColor = '#E2A3011A';
                }
            } else {
                ctaPhoneInput.style.color = '';
                ctaPhoneInput.style.boxShadow = 'inset 0 0 0 2px #fff';
                ctaPhoneInput.style.backgroundColor = '';
            }
            if (originalValue !== filteredValue) {
                ctaPhoneInput.style.backgroundColor = '#FFDDDD';
                setTimeout(() => {
                    ctaPhoneInput.style.backgroundColor = filteredValue.trim() ? '#E2A3011A' : '';
                }, 200);
            }
        });

        ctaNameInput.addEventListener('input', function (e) {
            if (ctaNameInput.value.trim()) {
                ctaNameInput.style.color = ''; // Ваш стандартный цвет текста
                ctaNameInput.style.boxShadow = 'inset 0 0 0 2px #fff'; // Ваш стандартный цвет обводки
                ctaNameInput.style.backgroundColor = ''; // Ваш стандартный фон
            }
            const input = e.target;
            const value = input.value;
            const filteredValue = value.replace(/[^a-zA-Z\u00C0-\u00FF\u0100-\u024F\u0400-\u04FF\s]/g, '');
            input.value = filteredValue;
            if (value !== filteredValue) {
                input.style.backgroundColor = '#FFDDDD';
                setTimeout(function () {
                    input.style.backgroundColor = '';
                }, 200);
            }
        });

        form.addEventListener('submit', function (e) {
            const filteredValue = ctaPhoneInput.value.replace(/[^0-9+]/g, ''); // Оставить только цифры и плюс
            ctaPhoneInput.value = filteredValue;

            let valid = true;

            if (!ctaNameInput.value.trim()) {
                valid = false;
                ctaNameInput.style.color = '#FF5252';
                ctaNameInput.style.boxShadow = 'inset 0 0 0 2px #FF5252';
                ctaNameInput.style.backgroundColor = '#FF52521A';
            } else {
                ctaNameInput.style.color = '';
                ctaNameInput.style.boxShadow = 'inset 0 0 0 2px #fff';
                ctaNameInput.style.backgroundColor = '';
            }

            if (!ctaPhoneInput.value.trim()) {
                valid = false;
                ctaPhoneInput.style.color = '#FF5252';
                ctaPhoneInput.style.boxShadow = 'inset 0 0 0 2px #FF5252';
                ctaPhoneInput.style.backgroundColor = '#FF52521A';
            } else {
                ctaPhoneInput.style.color = '';
                ctaPhoneInput.style.boxShadow = 'inset 0 0 0 2px #fff';
                ctaPhoneInput.style.backgroundColor = '';
            }

            if (!filteredValue.trim() || !iti.isValidNumber()) {
                valid = false;
                ctaPhoneInput.style.color = '#FF5252';
                ctaPhoneInput.style.boxShadow = 'inset 0 0 0 2px #FF5252';
                ctaPhoneInput.style.backgroundColor = '#FF52521A';
                const errorCode = iti.getValidationError();
                let errorMessage;
                switch (errorCode) {
                    case intlTelInputUtils.validationError.IS_POSSIBLE:
                        errorMessage = 'Неверный номер телефона.';
                        break;
                    case intlTelInputUtils.validationError.INVALID_LENGTH:
                        errorMessage = 'Номер имеет неверную длину.';
                        break;
                    case intlTelInputUtils.validationError.INVALID_COUNTRY_CODE:
                        errorMessage = 'Номер имеет неверный код страны.';
                        break;
                    case intlTelInputUtils.validationError.TOO_LONG:
                        errorMessage = 'Номер слишком длинный.';
                        break;
                    case intlTelInputUtils.validationError.TOO_SHORT:
                        errorMessage = 'Номер слишком короткий.';
                        break;
                    case intlTelInputUtils.validationError.NOT_A_NUMBER:
                        errorMessage = 'Неверный номер телефона.';
                        break;
                    default:
                        errorMessage = 'Неверный номер телефона.';
                        break;
                }
                alert(errorMessage);
            }

            if (!valid) {
                e.preventDefault(); // Остановить отправку формы
                return false;
            }

            document.getElementById('viibes__modal_loader').style.display = 'flex';
        });
    });
});


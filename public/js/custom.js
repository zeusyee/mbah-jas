// public/js/custom.js

// Utility functions
const Utils = {
    // Format currency to Indonesian Rupiah
    formatCurrency: (amount) => {
        return new Intl.NumberFormat('id-ID', {
            style: 'currency',
            currency: 'IDR',
            minimumFractionDigits: 0
        }).format(amount);
    },

    // Format date to Indonesian format
    formatDate: (date) => {
        return new Intl.DateTimeFormat('id-ID', {
            weekday: 'long',
            year: 'numeric',
            month: 'long',
            day: 'numeric'
        }).format(new Date(date));
    },

    // Show notification
    showNotification: (message, type = 'success') => {
        const notification = document.createElement('div');
        notification.className = `notification bg-${type === 'success' ? 'green' : 'red'}-600 text-white px-6 py-4 rounded-lg shadow-lg`;
        notification.innerHTML = `
            <div class="flex items-center">
                <i class="fas fa-${type === 'success' ? 'check-circle' : 'exclamation-circle'} mr-3"></i>
                <span>${message}</span>
            </div>
        `;
        
        document.body.appendChild(notification);
        
        // Show notification
        setTimeout(() => notification.classList.add('show'), 100);
        
        // Hide notification after 5 seconds
        setTimeout(() => {
            notification.classList.remove('show');
            setTimeout(() => document.body.removeChild(notification), 300);
        }, 5000);
    },

    // Smooth scroll to element
    scrollToElement: (elementId, offset = 0) => {
        const element = document.getElementById(elementId);
        if (element) {
            const elementPosition = element.getBoundingClientRect().top;
            const offsetPosition = elementPosition + window.pageYOffset - offset;

            window.scrollTo({
                top: offsetPosition,
                behavior: 'smooth'
            });
        }
    },

    // Debounce function
    debounce: (func, wait) => {
        let timeout;
        return function executedFunction(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }
};

// Menu filtering functionality
const MenuFilter = {
    init: () => {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const menuItems = document.querySelectorAll('.menu-item');
        
        filterButtons.forEach(button => {
            button.addEventListener('click', (e) => {
                const category = e.target.dataset.category || 'all';
                MenuFilter.filterItems(category, menuItems, filterButtons, e.target);
            });
        });
    },

    filterItems: (category, items, buttons, activeButton) => {
        // Update button styles
        buttons.forEach(btn => {
            btn.classList.remove('bg-green-600');
            btn.classList.add('bg-gray-700');
        });
        activeButton.classList.remove('bg-gray-700');
        activeButton.classList.add('bg-green-600');

        // Filter items with animation
        items.forEach((item, index) => {
            const itemCategory = item.dataset.category;
            const shouldShow = category === 'all' || itemCategory === category;
            
            if (shouldShow) {
                setTimeout(() => {
                    item.style.display = 'block';
                    item.classList.add('animate-fade-in-up');
                }, index * 100);
            } else {
                item.style.display = 'none';
                item.classList.remove('animate-fade-in-up');
            }
        });
    }
};

// Form validation
const FormValidator = {
    init: () => {
        const forms = document.querySelectorAll('form[data-validate]');
        forms.forEach(form => {
            form.addEventListener('submit', FormValidator.handleSubmit);
        });
    },

    handleSubmit: (e) => {
        const form = e.target;
        const isValid = FormValidator.validateForm(form);
        
        if (!isValid) {
            e.preventDefault();
            Utils.showNotification('Mohon lengkapi semua field yang diperlukan', 'error');
        }
    },

    validateForm: (form) => {
        const requiredFields = form.querySelectorAll('[required]');
        let isValid = true;

        requiredFields.forEach(field => {
            if (!field.value.trim()) {
                FormValidator.showFieldError(field);
                isValid = false;
            } else {
                FormValidator.clearFieldError(field);
            }
        });

        return isValid;
    },

    showFieldError: (field) => {
        field.classList.add('border-red-500');
        let errorMsg = field.parentNode.querySelector('.error-message');
        
        if (!errorMsg) {
            errorMsg = document.createElement('span');
            errorMsg.className = 'error-message text-red-500 text-sm mt-1';
            errorMsg.textContent = 'Field ini wajib diisi';
            field.parentNode.appendChild(errorMsg);
        }
    },

    clearFieldError: (field) => {
        field.classList.remove('border-red-500');
        const errorMsg = field.parentNode.querySelector('.error-message');
        if (errorMsg) {
            errorMsg.remove();
        }
    }
};

// Reservation form enhancements
const ReservationForm = {
    init: () => {
        const menuCheckboxes = document.querySelectorAll('input[name="selected_menus[]"]');
        const quantityInputs = document.querySelectorAll('input[name="quantities[]"]');
        
        menuCheckboxes.forEach((checkbox, index) => {
            checkbox.addEventListener('change', () => {
                ReservationForm.handleMenuSelection(checkbox, quantityInputs[index]);
            });
        });

        quantityInputs.forEach(input => {
            input.addEventListener('input', ReservationForm.updateOrderSummary);
        });

        // Set minimum date to today
        const dateInput = document.querySelector('input[type="date"]');
        if (dateInput) {
            dateInput.min = new Date().toISOString().split('T')[0];
        }
    },

    handleMenuSelection: (checkbox, quantityInput) => {
        quantityInput.disabled = !checkbox.checked;
        if (!checkbox.checked) {
            quantityInput.value = 1;
        }
        ReservationForm.updateOrderSummary();
    },

    updateOrderSummary: () => {
        const selectedMenus = document.querySelectorAll('input[name="selected_menus[]"]:checked');
        const summaryContainer = document.getElementById('order-summary');
        const summaryItems = document.getElementById('summary-items');
        const totalPrice = document.getElementById('total-price');
        
        if (selectedMenus.length === 0) {
            summaryContainer.classList.add('hidden');
            return;
        }

        let total = 0;
        summaryItems.innerHTML = '';

        selectedMenus.forEach(checkbox => {
            const menuId = checkbox.value;
            const quantityInput = document.querySelector(`input[name="quantities[]"]:nth-of-type(${Array.from(document.querySelectorAll('input[name="selected_menus[]"]')).indexOf(checkbox) + 1})`);
            const quantity = parseInt(quantityInput.value) || 1;
            
            // Get menu data (you might want to store this in a data attribute or global variable)
            const menuName = checkbox.closest('.bg-gray-700\\/50').querySelector('h4').textContent;
            const priceText = checkbox.closest('.bg-gray-700\\/50').querySelector('.text-green-500').textContent;
            const price = parseInt(priceText.replace(/[^\d]/g, ''));
            
            const subtotal = price * quantity;
            total += subtotal;

            const itemDiv = document.createElement('div');
            itemDiv.className = 'flex justify-between items-center';
            itemDiv.innerHTML = `
                <span>${menuName} x${quantity}</span>
                <span class="text-green-500">${Utils.formatCurrency(subtotal)}</span>
            `;
            summaryItems.appendChild(itemDiv);
        });

        summaryContainer.classList.remove('hidden');
        totalPrice.textContent = Utils.formatCurrency(total);
    }
};

// Loading states
const LoadingStates = {
    show: (element, text = 'Loading...') => {
        const originalContent = element.innerHTML;
        element.dataset.originalContent = originalContent;
        element.innerHTML = `
            <div class="flex items-center justify-center">
                <div class="loading-spinner mr-3"></div>
                <span>${text}</span>
            </div>
        `;
        element.disabled = true;
    },

    hide: (element) => {
        const originalContent = element.dataset.originalContent;
        if (originalContent) {
            element.innerHTML = originalContent;
            delete element.dataset.originalContent;
        }
        element.disabled = false;
    }
};

// WhatsApp integration
const WhatsApp = {
    sendMessage: (number, message) => {
        const url = `https://wa.me/${number}?text=${encodeURIComponent(message)}`;
        window.open(url, '_blank');
    },

    formatReservationMessage: (formData) => {
        let message = "Halo, saya ingin membuat reservasi:\n\n";
        message += `Nama: ${formData.name}\n`;
        message += `No. HP: ${formData.phone}\n`;
        message += `Tanggal: ${Utils.formatDate(formData.date)}\n`;
        message += `Waktu: ${formData.time} WIB\n`;
        message += `Jumlah Tamu: ${formData.guests} orang\n`;

        if (formData.selectedMenus && formData.selectedMenus.length > 0) {
            message += "\nMenu yang dipesan:\n";
            // Add menu details here
        }

        if (formData.notes) {
            message += `\nCatatan: ${formData.notes}\n`;
        }

        message += "\nMohon konfirmasinya. Terima kasih!";
        return message;
    }
};

// Initialize all modules when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    MenuFilter.init();
    FormValidator.init();
    ReservationForm.init();

    // Add smooth scrolling to all anchor links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const targetId = this.getAttribute('href').substring(1);
            Utils.scrollToElement(targetId, 80);
        });
    });

    // Add loading states to forms
    document.querySelectorAll('form').forEach(form => {
        form.addEventListener('submit', function() {
            const submitBtn = this.querySelector('button[type="submit"]');
            if (submitBtn) {
                LoadingStates.show(submitBtn, 'Mengirim...');
            }
        });
    });
});
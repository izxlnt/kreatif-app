<header class="main-header-inner sticky-header sticky-header--normal">
    <div class="container">
        <div class="main-header-inner__inner">
            <div class="main-header-inner__logo">
                <a href="{{ url('/') }}">
                    <img src="assets/images/logo-4.png" alt="Tolak HTML" width="184">
                </a>
            </div><!-- /.main-header-inner__logo -->

            <nav class="main-header-inner__nav main-menu">
                <x-menuList/>
            </nav><!-- /.main-header-inner__nav -->
            <div class="main-header-inner__right">
                <div class="mobile-nav__btn mobile-nav__toggler">
                    <span></span>
                    <span></span>
                    <span></span>
                </div><!-- /.mobile-nav__toggler -->
                
                <a href="{{ url('/contact') }}" class="tolak-btn main-header-inner__btn">
                    <b>{{ __('common.discover_more') }}</b><span></span>
                </a><!-- /.thm-btn main-header-inner__btn -->
            </div><!-- /.main-header-inner__right -->
        </div><!-- /.main-header-inner__inner -->
    </div><!-- /.container-fluid -->
</header><!-- /.main-header-inner -->

<style>
/* Language Selector Styles */
.language-selector {
    margin-right: 20px;
}

.language-toggle {
    background: none;
    border: none;
    color: #333;
    display: flex;
    align-items: center;
    gap: 8px;
    padding: 8px 12px;
    border-radius: 6px;
    transition: all 0.3s ease;
    font-size: 14px;
    font-weight: 500;
    cursor: pointer;
}

.language-toggle:hover {
    background-color: rgba(0, 0, 0, 0.05);
    color: #007bff;
}

.language-toggle .icon-globe {
    font-size: 16px;
}

.language-toggle .current-lang {
    font-weight: 600;
    min-width: 20px;
    text-align: center;
}

.language-toggle .fa-chevron-down {
    font-size: 10px;
    transition: transform 0.3s ease;
}

.language-toggle[aria-expanded="true"] .fa-chevron-down {
    transform: rotate(180deg);
}

.language-dropdown {
    min-width: 160px;
    border: 1px solid rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
    padding: 8px 0;
    margin-top: 5px;
}

.language-dropdown .dropdown-item {
    display: flex;
    align-items: center;
    gap: 10px;
    padding: 10px 16px;
    color: #333;
    text-decoration: none;
    transition: all 0.2s ease;
    font-size: 14px;
}

.language-dropdown .dropdown-item:hover {
    background-color: #f8f9fa;
    color: #007bff;
}

.language-dropdown .dropdown-item.active {
    background-color: #007bff;
    color: white;
}

.language-dropdown .dropdown-item.active:hover {
    background-color: #0056b3;
}

.flag-emoji {
    font-size: 18px;
    width: 20px;
    text-align: center;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .language-selector {
        margin-right: 10px;
    }
    
    .language-toggle {
        padding: 6px 8px;
        font-size: 13px;
    }
    
    .language-toggle .current-lang {
        display: none;
    }
    
    .language-dropdown {
        min-width: 140px;
    }
    
    .language-dropdown .dropdown-item {
        font-size: 13px;
        padding: 8px 12px;
    }
}

/* Dark theme support */
.main-header-inner.dark-theme .language-toggle {
    color: white;
}

.main-header-inner.dark-theme .language-toggle:hover {
    background-color: rgba(255, 255, 255, 0.1);
    color: #007bff;
}

.main-header-inner.dark-theme .language-dropdown {
    background-color: #2c3e50;
    border-color: rgba(255, 255, 255, 0.1);
}

.main-header-inner.dark-theme .language-dropdown .dropdown-item {
    color: white;
}

.main-header-inner.dark-theme .language-dropdown .dropdown-item:hover {
    background-color: rgba(255, 255, 255, 0.1);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Language selector enhancement
    const languageToggle = document.querySelector('.language-toggle');
    const languageDropdown = document.querySelector('.language-dropdown');
    
    if (languageToggle && languageDropdown) {
        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!languageToggle.contains(event.target) && !languageDropdown.contains(event.target)) {
                languageToggle.setAttribute('aria-expanded', 'false');
                languageDropdown.style.display = 'none';
            }
        });
        
        // Toggle dropdown
        languageToggle.addEventListener('click', function(event) {
            event.preventDefault();
            const isExpanded = languageToggle.getAttribute('aria-expanded') === 'true';
            languageToggle.setAttribute('aria-expanded', !isExpanded);
            languageDropdown.style.display = isExpanded ? 'none' : 'block';
        });
        
        // Handle language change with loading state
        const languageItems = document.querySelectorAll('.language-dropdown .dropdown-item');
        languageItems.forEach(item => {
            item.addEventListener('click', function(event) {
                // Add loading state
                const originalText = this.querySelector('span:last-child').textContent;
                this.querySelector('span:last-child').textContent = 'Loading...';
                this.style.opacity = '0.6';
                
                // Allow navigation to proceed
                // The loading state will be replaced when page loads
            });
        });
    }
});
</script>
<nav class="navbar-main-container tma_d2 pd8lr" id="navbar-main-nav">
    <div class="navbar-main-wrapper">
        <div class="navbar-main-logo-area">
            <a href="/" class="lb48 navbar-main-logo-link">
                {{-- 🔹 Logo + Texto --}}
                <img 
                    src="{{ $page->baseUrl }}/assets/images/logotype.png" 
                    alt="Mukimono Css Logo" 
                    class="navbar-main-logo img24"
                >
            </a>
        </div>
        
        <div class="navbar-main-right-group">
            <ul id="navbar-main-primary-list" class="navbar-main-primary-list tma_d7xhv">
                <li class="navbar-main-item">
                    <a 
                        href="/" 
                        class="navbar-main-link lb48 @if ($page->isActive('/')) navbar-main-link-active @endif"
                    >
                        Inicio
                    </a>
                </li>
                <li class="navbar-main-item">
                    <a 
                        href="/contact" 
                        class="navbar-main-link lb48 @if ($page->isActive('/contact')) navbar-main-link-active @endif"
                    >
                        Contacto
                    </a>
                </li>
            </ul>

            <button 
                type="button" 
                class="navbar-main-toggle-button bt48 wi48 tma_d7hv" 
                aria-controls="navbar-main-secondary-list" 
                aria-expanded="false" 
                id="navbar-main-toggle"
            >
                ☰
            </button>
            
            <ul id="navbar-main-secondary-list" class="navbar-main-secondary-list tma_d4 tma_d7xhv">
                <li class="navbar-main-item">
                    <a 
                        href="/alert" 
                        class="navbar-main-link lb48 @if ($page->isActive('/alert')) navbar-main-link-active @endif"
                    >
                        Alert
                    </a>
                </li>
                <li class="navbar-main-item">
                    <a 
                        href="/animation" 
                        class="navbar-main-link lb48 @if ($page->isActive('/animation')) navbar-main-link-active @endif"
                    >
                        Animation
                    </a>
                </li>
                <li class="navbar-main-item">
                    <a 
                        href="/blur" 
                        class="navbar-main-link lb48 @if ($page->isActive('/blur')) navbar-main-link-active @endif"
                    >
                        Blur
                    </a>
                </li>
            </ul>
        </div>
    </div>

    {{-- CSS Integrado Mínimo --}}
    <style>
        .navbar-main-wrapper {
            max-width: 1200px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: relative;
        }

        /* 🔹 Logo */
        .navbar-main-logo-link {
            display: flex;
            align-items: center;
            gap: 10px;
            text-decoration: none;
        }

        .navbar-main-logo {
            height: 48px;
            width: auto;
            display: inline-block;
        }

        .navbar-main-title {
            font-weight: 600;
            text-decoration: none;
        }

        /* Grupo derecho */
        .navbar-main-right-group {
            display: flex; 
            align-items: center;
            position: relative; 
        }

        .navbar-main-primary-list {
            display: flex; 
            list-style: none;
        }

        .navbar-main-toggle-button {
            background: none;
            border: none;
            cursor: pointer;
            display: block; 
        }

        .navbar-main-secondary-list {
            position: absolute;
            top: 100%;
            right: 0;
            width: 200px;
            list-style: none;
            z-index: 1000;
            display: block;
            height: 0;
            overflow: hidden;
            transition: height 0.3s ease;
        }

        .navbar-main-secondary-list .navbar-main-item {
            display: block;
        }

        .navbar-main-secondary-list .navbar-main-link {
            padding: 10px 15px;
            display: block;
            text-decoration: none;
        }

        .navbar-main-secondary-list.navbar-main-is-open {
            height: auto; 
            max-height: 500px; 
        }

        @media (max-width: 768px) {
            .navbar-main-secondary-list {
                position: absolute; 
                top: 60px;
                left: 0;
                right: 0;
                width: auto;
            }

            .navbar-main-link-active {
                border-bottom: none; 
            }
        }
    </style>

    {{-- JS para el toggle --}}
    <script>
        const menuToggleButton = document.getElementById('navbar-main-toggle');
        const navigationMenuList = document.getElementById('navbar-main-secondary-list'); 
        const OPEN_CLASS = 'navbar-main-is-open';

        function toggleMenu() {
            navigationMenuList.classList.toggle(OPEN_CLASS);
            const isExpanded = navigationMenuList.classList.contains(OPEN_CLASS);
            menuToggleButton.setAttribute('aria-expanded', isExpanded);
            menuToggleButton.textContent = isExpanded ? '✕' : '☰';
        }

        menuToggleButton.addEventListener('click', toggleMenu);
    </script>
</nav>

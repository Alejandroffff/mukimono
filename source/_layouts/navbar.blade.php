<nav class="tma_sec">
    <div>
        <div>
            <a href="/">
                <span>Mukimono Css</span>
            </a>
        </div>
        
        <ul>
            <li>
                <a 
                    href="/" 
                    @if ($page->isActive('/')) 
                        {{-- La clase de Blade se mantiene porque es lógica de servidor, pero sin el nombre de la clase CSS --}}
                    @endif
                >
                    Home
                </a>
            </li>
            <li>
                <a 
                    href="/contact" 
                    @if ($page->isActive('/contact')) 
                        {{-- La clase de Blade se mantiene, pero sin el nombre de la clase CSS --}}
                    @endif
                >
                    Contact
                </a>
            </li>
        </ul>
    </div>
</nav>
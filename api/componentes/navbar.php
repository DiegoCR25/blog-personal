
<header class="site-header">
    <nav class="container navbar"
         aria-label="Navegación principal">

        <!-- Marca personal -->
        <a class="brand" href="/" aria-label="Ir al inicio">

            <img
                src="/assets/img/avatar-diego.png"
                alt=""
                class="brand-avatar"
                width="38"
                height="38"
            >

            <span>
                <?= e($perfil['iniciales']) ?>
                <span class="brand-dot">.</span>
            </span>

        </a>

        <!-- Menú para celulares -->
        <button
            class="menu-toggle"
            type="button"
            aria-label="Abrir menú"
            aria-expanded="false"
            aria-controls="nav-links">
            ☰
        </button>

        <!-- Enlaces -->
        <div class="nav-links" id="nav-links">

            <a href="/">Inicio</a>

            <a href="/?pagina=gustos">
                Mis gustos
            </a>

            <a href="/?pagina=musica">
                Mi música
            </a>

            <a href="/?pagina=pasatiempos">
                Pasatiempos
            </a>

            <a href="/?pagina=experiencias">
                Experiencias
            </a>

            <a href="/?pagina=proyectos">
                Proyectos
            </a>

        </div>
    </nav>
</header>

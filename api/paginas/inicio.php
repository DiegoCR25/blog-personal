
<main>

    <!-- ===================================== -->
    <!-- 01. PORTADA PRINCIPAL                 -->
    <!-- ===================================== -->

    <section class="hero container" id="inicio">

        <div class="hero-copy">

            <span class="eyebrow">
                <span class="status-dot"></span>
                BIENVENIDO A MI ESPACIO PERSONAL
            </span>

            <p class="hero-kicker">
                <?= e($perfil['presentacion']) ?>
            </p>

            <h1>
                <?= e($perfil['nombre']) ?>
                <span class="accent">.</span>
            </h1>

            <h2>
                Un poco de código, música y muchas ideas.
            </h2>

            <p class="hero-description">
                <?= e($perfil['descripcion']) ?>
            </p>

            <p class="hero-description">
                Este es mi pequeño rincón de internet,
                donde comparto las cosas que disfruto,
                mis intereses, experiencias y proyectos.
                Un lugar para mostrar un poco más
                sobre quién soy.
            </p>

            <div class="hero-actions">

                <a class="button primary" href="#sobre-mi">
                    Conóceme más
                    <span aria-hidden="true">↗</span>
                </a>

                <a class="button secondary" href="#mis-intereses">
                    Explorar mi mundo
                </a>

            </div>

            <div class="hero-meta">

                <span>
                    ⌁ <?= e($perfil['ubicacion']) ?>
                </span>

                <span>
                    ✦ Aprendiendo, creando y disfrutando
                </span>

            </div>

        </div>


        <!-- AVATAR Y TARJETA TECNOLÓGICA -->

        <div class="hero-visual">

            <div class="orb orb-one"></div>
            <div class="orb orb-two"></div>

            <div class="hero-avatar-wrapper">

                <img
                    src="/assets/img/avatar-diego.png"
                    alt="Avatar ilustrado de Diego Briceño"
                    class="hero-avatar"
                    width="210"
                    height="210"
                >

                <span class="avatar-status">
                    ✦ Hola, soy Diego
                </span>

            </div>

            <div class="code-card">

                <div class="window-dots">
                    <i></i>
                    <i></i>
                    <i></i>
                </div>

                <pre><span class="code-purple">const</span> diego = {
  nombre: <span class="code-green">"<?= e($perfil['nombre']) ?>"</span>,
  intereses: [
    <span class="code-green">"Música"</span>,
    <span class="code-green">"Tecnología"</span>,
    <span class="code-green">"Experiencias"</span>
  ],
  actitud: <span class="code-green">"Seguir aprendiendo"</span>
};<span class="cursor">▍</span></pre>

            </div>

            <span class="visual-label">
                WELCOME TO MY WORLD_
            </span>

        </div>

    </section>


    <!-- ===================================== -->
    <!-- 02. SOBRE MÍ                          -->
    <!-- ===================================== -->

    <section class="section section-alt" id="sobre-mi">

        <div class="container">

            <p class="section-kicker">
                01 / QUIÉN SOY
            </p>

            <h2>
                Un poco <span class="accent">sobre mí.</span>
            </h2>

            <div class="about-grid">

                <div class="about-text">

                    <?php if (!empty($perfil['sobre_mi']) &&
                              is_array($perfil['sobre_mi'])): ?>

                        <?php foreach ($perfil['sobre_mi'] as $parrafo): ?>

                            <p><?= e($parrafo) ?></p>

                        <?php endforeach; ?>

                    <?php else: ?>

                        <p>
                            ¡Hola! Soy Diego Briceño.
                            Me interesa la tecnología,
                            la creatividad y descubrir
                            nuevas formas de aprender.
                        </p>

                        <p>
                            Disfruto de la música y de
                            dedicar tiempo a actividades
                            que me permiten desconectarme
                            de la rutina.
                        </p>

                        <p>
                            Este blog reúne una parte de
                            mis intereses, proyectos y
                            experiencias personales.
                        </p>

                    <?php endif; ?>

                    <a
                        href="/?pagina=gustos"
                        class="button secondary about-button"
                    >
                        Descubre mis gustos ↗
                    </a>

                </div>


                <div class="skills">

                    <h3>
                        Tecnologías que estoy explorando
                    </h3>

                    <p class="skills-description">
                        Herramientas y tecnologías
                        que forman parte de mi proceso
                        de aprendizaje.
                    </p>

                    <div class="tags">

                        <?php foreach ($habilidades as $habilidad): ?>

                            <span class="tag">
                                <?= e($habilidad) ?>
                            </span>

                        <?php endforeach; ?>

                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- ===================================== -->
    <!-- 03. MIS INTERESES                     -->
    <!-- ===================================== -->

    <section class="section" id="mis-intereses">

        <div class="container">

            <p class="section-kicker">
                02 / MI MUNDO
            </p>

            <h2>
                Las cosas que <span class="accent">disfruto.</span>
            </h2>

            <p class="section-description">
                Más allá de los estudios y los proyectos,
                también hay actividades, gustos y
                experiencias que forman parte de mi vida.
                Estos son algunos espacios donde comparto
                un poco más sobre ellos.
            </p>

            <div class="interests-grid">

                <!-- MÚSICA -->

                <a
                    href="/?pagina=musica"
                    class="interest-card"
                >

                    <span class="interest-icon">🎧</span>

                    <h3>Mi música</h3>

                    <p>
                        Canciones, artistas, álbumes y
                        momentos musicales que quiero
                        compartir.
                    </p>

                    <span class="interest-link">
                        Explorar música ↗
                    </span>

                </a>


                <!-- PASATIEMPOS -->

                <a
                    href="/?pagina=pasatiempos"
                    class="interest-card"
                >

                    <span class="interest-icon">🎮</span>

                    <h3>Mis pasatiempos</h3>

                    <p>
                        Actividades para disfrutar,
                        entretenerme y desconectarme
                        de la rutina diaria.
                    </p>

                    <span class="interest-link">
                        Ver pasatiempos ↗
                    </span>

                </a>


                <!-- EXPERIENCIAS -->

                <a
                    href="/?pagina=experiencias"
                    class="interest-card"
                >

                    <span class="interest-icon">📸</span>

                    <h3>Mis experiencias</h3>

                    <p>
                        Momentos especiales, aprendizajes,
                        recuerdos e historias que forman
                        parte de mi camino.
                    </p>

                    <span class="interest-link">
                        Descubrir experiencias ↗
                    </span>

                </a>


                <!-- GUSTOS -->

                <a
                    href="/?pagina=gustos"
                    class="interest-card"
                >

                    <span class="interest-icon">✨</span>

                    <h3>Mis gustos</h3>

                    <p>
                        Una colección de cosas que me
                        llaman la atención, desde
                        entretenimiento hasta tecnología.
                    </p>

                    <span class="interest-link">
                        Conocer mis gustos ↗
                    </span>

                </a>

            </div>

        </div>

    </section>


    <!-- ===================================== -->
    <!-- 04. PROYECTOS                         -->
    <!-- ===================================== -->

    <section class="section section-alt" id="proyectos">

        <div class="container">

            <p class="section-kicker">
                03 / LO QUE CREO
            </p>

            <h2>
                Proyectos <span class="accent">destacados.</span>
            </h2>

            <p class="section-description">
                Un espacio para compartir ideas,
                proyectos personales y trabajos
                desarrollados durante mi aprendizaje
                en tecnología.
            </p>

            <div class="card-grid">

                <?php foreach ($proyectos as $indice => $proyecto): ?>

                    <article class="project-card">

                        <div class="card-top">

                            <span class="card-number">
                                / <?= sprintf('%02d', $indice + 1) ?>
                            </span>

                            <span class="project-status">
                                <?= e($proyecto['estado']) ?>
                            </span>

                        </div>

                        <div class="project-icon" aria-hidden="true">
                            ⌘
                        </div>

                        <h3>
                            <?= e($proyecto['titulo']) ?>
                        </h3>

                        <p>
                            <?= e($proyecto['descripcion']) ?>
                        </p>

                        <div class="tags">

                            <?php foreach ($proyecto['tecnologias'] as $tecnologia): ?>

                                <span class="tag">
                                    <?= e($tecnologia) ?>
                                </span>

                            <?php endforeach; ?>

                        </div>

                    </article>

                <?php endforeach; ?>

            </div>

            <div class="section-action">

                <a
                    href="/?pagina=proyectos"
                    class="button secondary"
                >
                    Ver todos mis proyectos ↗
                </a>

            </div>

        </div>

    </section>


    <!-- ===================================== -->
    <!-- 05. ARTÍCULOS                         -->
    <!-- ===================================== -->

    <section class="section" id="articulos">

        <div class="container">

            <p class="section-kicker">
                04 / MIS PUBLICACIONES
            </p>

            <h2>
                Ideas y <span class="accent">aprendizajes.</span>
            </h2>

            <p class="section-description">
                Algunas notas sobre tecnología,
                experiencias personales y temas
                que me resultan interesantes.
            </p>

            <div class="article-list">

                <?php foreach ($articulos as $articulo): ?>

                    <article class="article-item">

                        <div>

                            <span class="article-meta">
                                <?= e($articulo['categoria']) ?>
                                ·
                                <?= e($articulo['fecha']) ?>
                            </span>

                            <h3>
                                <?= e($articulo['titulo']) ?>
                            </h3>

                            <p>
                                <?= e($articulo['resumen']) ?>
                            </p>

                        </div>

                        <span class="article-arrow" aria-hidden="true">
                            ↗
                        </span>

                    </article>

                <?php endforeach; ?>

            </div>

        </div>

    </section>


    <!-- ===================================== -->
    <!-- 06. CONTACTO                          -->
    <!-- ===================================== -->

    <section class="section contact-section" id="contacto">

        <div class="container contact-inner">

            <p class="section-kicker">
                05 / CONECTEMOS
            </p>

            <h2>
                ¿Compartimos una <span class="accent">idea?</span>
            </h2>

            <p>
                Gracias por visitar mi espacio personal.
                Si compartimos intereses, te gusta la
                tecnología o simplemente quieres conocer
                algunos de mis proyectos, puedes
                encontrarme en GitHub.
            </p>

            <div class="hero-actions contact-actions">

                <?php if (!empty($perfil['github'])): ?>

                    <a
                        href="<?= e($perfil['github']) ?>"
                        class="button primary"
                        target="_blank"
                        rel="noopener noreferrer"
                    >
                        Visitar mi GitHub ↗
                    </a>

                <?php endif; ?>

                <a
                    href="/?pagina=gustos"
                    class="button secondary"
                >
                    Seguir explorando
                </a>

            </div>

        </div>

    </section>

</main>

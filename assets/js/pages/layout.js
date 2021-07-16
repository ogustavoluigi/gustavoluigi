const app = `
    <div id="body">
        <div id="nav">
            <ul id="nav-itens">
                <li class="nav-item">
                    <router-link class="link active" to="/">Inicio</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="link" to="/sobre">Sobre</router-link>
                </li>
                <li class="nav-item">
                    <router-link class="link" to="/contato">Contato</router-link>
                </li>
            </ul>
        </div>
        <div id="content" v-bind:class="appContent">
            <header id="content-header">
            </header>
            <main id="content-body" class="transition">
                <transition
                    enter-active-class="animate__animated animate__fadeIn"
                    leave-active-class="animate__animated animate__fadeOutRight">
                    <router-view></router-view>
                </transition>
            </main>
            <footer id="content-footer" class="center-content">
                <ul id="redes-sociais">
                    <li class="rede-social tooltip">
                        <a class="center-content" target="_blank" href="https://www.linkedin.com/in/gustavoluigi/">
                        <i class="fa fa-linkedin"></i></a>
                    </li>
                    <li class="rede-social tooltip">
                        <a class="center-content" target="_blank" href="https://github.com/ogustavoluigi">
                        <i class="fa fa-github"></i></a>
                    </li>
                </ul>
                <p><i class="fa fa-copyright"></i> Gustavo Luigi</p>
            </footer>
        </div>
    </div>
`;
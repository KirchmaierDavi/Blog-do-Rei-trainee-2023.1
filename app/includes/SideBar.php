<div class="navigation">
        <div class="menuToggle"></div>
        <ul>
            <li class="list">
                <a href="/">
                    <span class="icon"><ion-icon name="home"></ion-icon></span>
                    <span class="text">Home</span>
                </a>
            </li>
            <li class="list">
                <a href="/admin">
                    <span class="icon"><ion-icon name="grid"></ion-icon></span>
                    <span class="text">Dashboard</span>
                </a>
            </li>
            <li class="list">
                <a href="/admin/userList">
                    <span class="icon"><ion-icon name="people"></ion-icon></span>
                    <span class="text">Lista de Usuários</span>
                </a>
            </li>
            <li class="list">
                <a href="/admin/postList">
                    <span class="icon"><ion-icon name="copy"></ion-icon></span>
                    <span class="text">Lista de Posts</span>
                </a>
            </li>
            <li class="list">
                <a href="/admin/customize" >
                    <span class="icon"><ion-icon name="create"></ion-icon></span>
                    <span class="text">Customize o Site</span>
                </a>
            </li>
            <li class="logout">
                <form action="/logout" method="POST">
                    <a onclick="javascript:this.parentNode.submit()">
                        <span class="icon"><ion-icon name="exit"></ion-icon></span>
                        <span class="text">Log Out</span>
                    </a>
                </form>
            </li>
        </ul>
    </div>
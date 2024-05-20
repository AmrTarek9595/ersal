<template>
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <div class="logo">
                <router-link to="/">
                    <img src="/images/index/logo.svg" alt="ersal-logo" />
                </router-link>
            </div>
            <button
                class="navbar-toggler navbar-dark"
                type="button"
                data-toggle="collapse"
                data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item" v-for="link in links" :key="link.to">
                        <router-link class="nav-link" :to="link.to">
                            {{ link.title }}
                        </router-link>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
export default {
    name: "NavBar",
    data: () => ({
        links: [
            {
                to: "/",
                title: "الرئيسية",
            },
            {
                to: "/services",
                title: "خدماتنا",
            },
            {
                to: "/contact",
                title: "تواصل معنا",
            },
            {
                to: "/about",
                title: "من نحن",
            },
        ],
    }),
};
</script>

<style lang="scss" scoped>
.navbar {
    background-color: #075087;
    padding: 1em;

    .logo img {
        max-height: 50px;
    }

    a {
        font-size: 18px;
        color: white;
    }

    .navbar-toggler-icon {
    }
}
</style>

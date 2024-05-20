<template>
    <div
        id="carouselExampleIndicators"
        class="carousel slide"
        data-ride="carousel"
    >
        <ol class="carousel-indicators">
            <li
                data-target="#carouselExampleIndicators"
                data-slide-to="0"
                class="active"
            ></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    class="d-block w-100"
                    alt="First slide"
                    src="/images/index/slider/1.jpg"
                />

                <div class="carousel-caption mb-5">
                    <h1 class="mb-3">استثمر في التسويق الرقمي</h1>
                    <p>
                        نضمن لك التميز بين منافسيك على أيدي خبرائنا في مجال
                        التسويق الرقمي
                    </p>
                </div>
            </div>
            <div class="carousel-item">
                <img
                    class="d-block w-100"
                    src="/images/index/slider/2.jpg"
                    alt="Second slide"
                />
                <div class="carousel-caption mb-5">
                    <h1 class="mb-3">ابدأ رحلة نجاحك معنا</h1>
                    <p>نساعدك في تحقيق النجاح الأمثل لعلامتك التجارية</p>
                </div>
            </div>
            <div class="carousel-item">
                <img
                    class="d-block w-100"
                    src="/images/index/slider/3.jpg"
                    alt="Third slide"
                />
                <div class="carousel-caption mb-5">
                    <h1 class="mb-3">نتخطى حدود العالم</h1>
                    <p>أهلاً بك في عالم غير محدود من الفرص والإمكانيات</p>
                </div>
            </div>
        </div>

        <a
            class="carousel-control-prev"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="prev"
        >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a
            class="carousel-control-next"
            href="#carouselExampleIndicators"
            role="button"
            data-slide="next"
        >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</template>

<script>
export default {
    name: "Slider",
    data: () => ({}),
};
</script>

<style lang="scss" scoped>
#carouselExampleIndicators {
    height: 100dvh;

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        width: 60px;
        height: 60px;
    }

    img {
        object-fit: cover;
        height: 100dvh;
    }

    h1 {
        font-size: 5vw;
    }

    p {
        font-size: 2vw;
    }
}
</style>

<template>
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
        <div class="container">

            <div class="section-title" data-aos="fade-up">
                <h2>{{ recentProjects }}</h2>
                <p>{{ checkoutProjects }}</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li
                            data-filter="*"
                            class="filter-active"
                            @click.prevent="getAllProjects"
                        >{{ all }}</li>
                        <li data-filter=".filter-app">{{ web }}</li>
                        <li data-filter=".filter-card">{{ app }}</li>
                        <li data-filter=".filter-web">{{ ui }}</li>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                <div class="col-lg-4 col-md-6 portfolio-item" v-for="project in projects">
                    <div class="portfolio-wrap" :key="project.id">
                        <img :src="location+project.image" class="img-fluid" alt="">
                        <div class="portfolio-links">
                            <a :href="location+project.image" data-gall="portfolioGallery" class="venobox" title="App 1"><i class="icofont-plus-circle"></i></a>
                            <a href="#" title="More Details"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>{{project.title}}</h4>
                            <p>{{project.text}}</p>
                        </div>
                    </div>
                </div>

<!--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">-->
<!--                    <div class="portfolio-wrap">-->
<!--                        <img src="assets/images/APP.png" class="img-fluid" alt="">-->
<!--                        <div class="portfolio-links">-->
<!--                            <a href="assets/images/APP.png" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-plus-circle"></i></a>-->
<!--                            <a href="#" title="More Details"><i class="icofont-link"></i></a>-->
<!--                        </div>-->
<!--                        <div class="portfolio-info">-->
<!--                            <h4> Fahd-A alarabic</h4>-->
<!--                            <p> An application used to track shipments until they reach the customer-->
<!--                                Google play Store:  </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">-->
<!--                    <div class="portfolio-wrap">-->
<!--                        <img src="assets/images/ppr.png" class="img-fluid" alt="">-->
<!--                        <div class="portfolio-links">-->
<!--                            <a href="assets/images/ppr.png" data-gall="portfolioGallery" class="venobox" title="App 2"><i class="icofont-plus-circle"></i></a>-->
<!--                            <a href="#" title="More Details"><i class="icofont-link"></i></a>-->
<!--                        </div>-->
<!--                        <div class="portfolio-info">-->
<!--                            <h4>IDEALGLASS</h4>-->
<!--                            <p>Specialized in manufacturing and installing</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">-->
<!--                    <div class="portfolio-wrap">-->
<!--                        <img src="assets/images/APP1.png" class="img-fluid" alt="">-->
<!--                        <div class="portfolio-links">-->
<!--                            <a href="assets/images/APP1.png" data-gall="portfolioGallery" class="venobox" title="Card 2"><i class="icofont-plus-circle"></i></a>-->
<!--                            <a href="#" title="More Details"><i class="icofont-link"></i></a>-->
<!--                        </div>-->
<!--                        <div class="portfolio-info">-->
<!--                            <h4>Whats market</h4>-->
<!--                            <p>An application for shopping and sharing materials on any platform such as WhatsApp or Messenger-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">-->
<!--                    <div class="portfolio-wrap">-->
<!--                        <img src="assets/images/WEB.png" class="img-fluid" alt="">-->
<!--                        <div class="portfolio-links">-->
<!--                            <a href="assets/images/WEB.png" data-gall="portfolioGallery" class="venobox" title="Web 2"><i class="icofont-plus-circle"></i></a>-->
<!--                            <a href="#" title="More Details"><i class="icofont-link"></i></a>-->
<!--                        </div>-->
<!--                        <div class="portfolio-info">-->
<!--                            <h4>PAYMAC</h4>-->
<!--                            <p>A FULL WEB SOLUTION COMPANY</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-4 col-md-6 portfolio-item filter-app">-->
<!--                    <div class="portfolio-wrap">-->
<!--                        <img src="assets/images/UI2.png" class="img-fluid" alt="">-->
<!--                        <div class="portfolio-links">-->
<!--                            <a href="assets/images/UI2.png" data-gall="portfolioGallery" class="venobox" title="App 3"><i class="icofont-plus-circle"></i></a>-->
<!--                            <a href="#" title="More Details"><i class="icofont-link"></i></a>-->
<!--                        </div>-->
<!--                        <div class="portfolio-info">-->
<!--                            <h4>petromas</h4>-->
<!--                            <p>The world of commercial oils in Egypt</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">-->
<!--                    <div class="portfolio-wrap">-->
<!--                        <img src="assets/images/APP.png" class="img-fluid" alt="">-->
<!--                        <div class="portfolio-links">-->
<!--                            <a href="assets/images/APP.png" data-gall="portfolioGallery" class="venobox" title="Card 1"><i class="icofont-plus-circle"></i></a>-->
<!--                            <a href="#" title="More Details"><i class="icofont-link"></i></a>-->
<!--                        </div>-->
<!--                        <div class="portfolio-info">-->
<!--                            <h4>Card 1</h4>-->
<!--                            <p>Card</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-4 col-md-6 portfolio-item filter-card">-->
<!--                    <div class="portfolio-wrap">-->
<!--                        <img src="assets/images/APP2.png"  class="img-fluid" alt="">-->
<!--                        <div class="portfolio-links">-->
<!--                            <a href="assets/images/APP2.png" data-gall="portfolioGallery" class="venobox" title="Card 3"><i class="icofont-plus-circle"></i></a>-->
<!--                            <a href="#" title="More Details"><i class="icofont-link"></i></a>-->
<!--                        </div>-->
<!--                        <div class="portfolio-info">-->
<!--                            <h4>Thanweya</h4>-->
<!--                            <p>The online high school application is directed to high school students to connect them with teachers and display the courses-->
<!--                                and materials for each educational stage in high school, as well as the tests that are automatically corrected through the-->
<!--                                system .-->
<!--                            </p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

<!--                <div class="col-lg-4 col-md-6 portfolio-item filter-web">-->
<!--                    <div class="portfolio-wrap">-->
<!--                        <img src="assets/images/UI.png" class="img-fluid" alt="">-->
<!--                        <div class="portfolio-links">-->
<!--                            <a href="assets/images/UI.png" data-gall="portfolioGallery" class="venobox" title="Web 3"><i class="icofont-plus-circle"></i></a>-->
<!--                            <a href="#" title="More Details"><i class="icofont-link"></i></a>-->
<!--                        </div>-->
<!--                        <div class="portfolio-info">-->
<!--                            <h4> 3</h4>-->
<!--                            <p>Web</p>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->

            </div>

        </div>
    </section>
    <!-- End Portfolio Section -->
</template>

<script>

export default {
    name:'projects-component',
    components:
    {

    },
    props:[
        'recentProjects',
        'checkoutProjects',
        'all',
        'web',
        'app',
        'ui'
    ],
    data() {
        return {
            location:'/MY-PORTFOLIO/public/storage/uploads/',
            projects:[],
        }
    },
    methods:{
        getAllProjects: async function (){
             const projects = await this.callApi('get',`${window.location.href}/projects`)
             if (projects.status = 200){
                 this.projects = projects.data.data
             }else{
                 this.e('something went wrong','Error')
             }
        },


    },
    async mounted() {
        const result = await this.callApi('get',`${window.location.href}/projects`)
        if (result.status = 200){
            this.projects = result.data.data
        }else{
            this.e('something went wrong','Error')
        }
     }
}
</script>

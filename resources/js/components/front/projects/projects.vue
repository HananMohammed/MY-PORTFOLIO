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
                            <a :href="project.url" title="More Details"><i class="icofont-link"></i></a>
                        </div>
                        <div class="portfolio-info">
                            <h4>{{project.title}}</h4>
                            <p v-html="project.text"></p>
                        </div>
                    </div>
                </div>
<!--                <pagination-->
<!--                    :data="projects"-->
<!--                ></pagination>-->
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
</template>

<script>
import pagination from 'laravel-vue-pagination';

export default {
    name:'projects-component',
    components:
        {
            pagination
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
    created() {
        this.getAllProjects();
    },
    methods:{
        getAllProjects: async function (){
            const projects = await this.callApi('get',`${window.location.href}/projects`)
            console.log(projects)
            if (projects.status = 200){
                this.projects = projects.data.data.data
            }else{
                this.e('something went wrong','Error')
            }
        }
    },
    async mounted() {
        const result = await this.callApi('get',`${window.location.href}/projects`)
          if (result.status = 200){
            this.projects = result.data.data.data
        }else{
            this.e('something went wrong','Error')
        }
    }

}

</script>

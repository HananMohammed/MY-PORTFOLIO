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
                        <li data-filter=".filter-app" v-for="category in categories" @click="getCategoryProject($event, category.id)">{{ category.title }}</li>
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
            categories:[],
        }
    },
    created() {
        this.getAllProjects();
    },
    methods:{
        getCategories: async function(){
            await this.callApi('get',`${window.location.href}/categories`)
                .then(response => {
                    if (response.status = 200){
                        this.categories = response.data.data
                    }
                })
                .catch(error => {
                    this.e(error.data.message,'Error')
                });
        },
        getAllProjects: async function (){
            await this.callApi('get',`${window.location.href}/projects`)
                  .then(response => {
                      if (response.status = 200){
                          this.projects = response.data.data.data
                      }
                  })
                  .catch(error => {
                        this.e(error.data.message,'Error')
                  });
        },
       async getCategoryProject(event, id){
            await this.callApi('get',`${window.location.href}/projects/category/${id}`)
                .then(response => {
                    if (response.status = 200){
                        this.projects = response.data.data.data
                    }
                })
                .catch(error => {
                    this.e(error.data.message,'Error')
                });
        }
    },
    async mounted() {
        this.getCategories();
        this.getAllProjects();
    }

}

</script>

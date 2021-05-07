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
                            :class="active? 'filter-active' :''"
                            v-on:click="active= !active"
                            @click.prevent="getAllProjects"
                        >{{ all }}</li>
                        <li  v-for="(category, index) in categories"
                             :data-filter=" category.title == 'App' ? '.filter-app' :  category.title == 'Web' ? '.filter-web' : '.filter-ui' "
                             @click="getCategoryProject($event, category.id)"
                             >{{ category.title }}</li>
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                <div class="col-lg-4 col-md-6 portfolio-item" v-for="project in projects.data" :key="project.id" v-if="projects">
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
                <nav aria-label="Page navigation example">
                    <ul class="pagination" v-if="projects.meta && projects.meta.total>6">
                        <li
                            :class=" projects.meta.current_page == 1 ? 'disabled' : '' "
                            @click.prevent="previous"
                        >
                            <a class="prev"  tabindex="-1" aria-disabled="true"><i class="fas fa-chevron-left"></i> prev</a>
                        </li>
                        <li class="pageNumber"
                            v-for="item in projects.meta.last_page"
                            :class="projects.meta.current_page == item ? 'active' : ''"
                            :aria-current="projects.meta.current_page == item ?'page':''"
                            @click.prevent="getResults(item)"
                        >
                            <a>
                                {{ item }}<span class="sr-only" v-if="projects.meta.current_page == item ">(current)</span>
                            </a>
                        </li>
                        <li
                            :class=" projects.meta.current_page == projects.meta.last_page ? 'disabled' : '' "
                            @click.prevent="next"
                        >
                            <a class="next" tabindex="-1" aria-disabled="true"> Next <i class="fas fa-chevron-right"></i></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </section>
    <!-- End Portfolio Section -->
</template>

<script>
 export default {
    name:'projects-component',
     props:[
        'recentProjects',
        'checkoutProjects',
        'all'
    ],
    data() {
        return {
            location:'/MY-PORTFOLIO/public/storage/uploads/',
            projects:{},
            categories:[],
            total:6,
            active:true,
        }
    },
    methods:{
        getCategories: async function(){
            await this.callApi('get',`categories`)
                .then(response => {
                    if (response.status = 200){
                        this.categories = response.data.data
                    }
                })
                .catch(error => {
                    this.e(error.data.message,'Error')
                });
        },
        getAllProjects: async function (page){
            if (page == 'undefined'){
                page = 1;
            }
            await this.callApi('get',`projects?page=${page}&total=${this.total}`)
                  .then(response => {
                      if (response.status = 200){
                          this.projects = response.data.data
                      }
                  })
                  .catch(error => {
                        this.e(error.data.message,'Error')
                  });
        },
       async getCategoryProject(event, id, page = 1){
           $("li").removeClass("filter-active");
           this.active=false
           event.target.className += 'filter-active'
           await this.callApi('get',`projects/category/${id}?page=${page}&total=${this.total}`)
                .then(response => {
                    if (response.status = 200){
                        this.projects = response.data.data
                    }
                })
                .catch(error => {
                    this.e(error.data.message,'Error')
                });
        },
       async getResults(page){
            if (page == 'undefined'){
                page = 1;
            }
           if (this.projects.meta.path == window.location.href+'/projects'){
               await this.callApi('get',`projects?page=${page}&total=${this.total}`)
                   .then(response => {
                       if (response.status = 200){
                           this.projects = response.data.data
                       }
                   })
                   .catch(error => {
                       this.e(error.data.message,'Error')
                   });
           }else{
               this.callApi('get', this.projects.meta.path+'?page='+page)
                   .then(response => {
                       if (response.status = 200){
                           this.projects = response.data.data
                       }
                   })
                   .catch(error => {
                       this.e(error.data.message,'Error')
                   });
           }

        },
       previous(){
            let page = this.projects.meta.current_page;
            if (page > 1 ){
                if(this.projects.meta.path == window.location.href+'/projects') {
                    this.getAllProjects(page-1);
                }else{
                    page -= 1
                    this.callApi('get', this.projects.meta.path+'?page='+page)
                        .then(response => {
                            if (response.status = 200){
                                this.projects = response.data.data
                            }
                        })
                        .catch(error => {
                            this.e(error.data.message,'Error')
                        });
                }
            }
       },
       next(){
           let page = this.projects.meta.current_page;
           if (page < this.projects.meta.last_page){
               if(this.projects.meta.path == window.location.href+'/projects') {
                   this.getAllProjects(page+1);
               }else{
                   page += 1
                    this.callApi('get', this.projects.meta.path+'?page='+page)
                       .then(response => {
                           if (response.status = 200){
                               this.projects = response.data.data
                           }
                       })
                       .catch(error => {
                           this.e(error.data.message,'Error')
                       });
               }
           }
        }
    },
    async mounted() {
        $(document).ready(function() {
            $(".next").click(function() {
                $(".pagination")
                    .find(".pageNumber.active")
                    .next()
                    .addClass("active");
                $(".pagination")
                    .find(".pageNumber.active")
                    .prev()
                    .removeClass("active");
            });
            $(".prev").click(function() {
                $(".pagination")
                    .find(".pageNumber.active")
                    .prev()
                    .addClass("active");
                $(".pagination")
                    .find(".pageNumber.active")
                    .next()
                    .removeClass("active");
            });
        });
        this.getCategories();
        this.getAllProjects();
     }

}

</script>
<style scoped>
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap");
nav{
    position: relative;
    left: 35%;
}
.pagination {
    background: #fff;
    display: flex;
    padding: 5px 10px;
    border-radius: 50px;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
}

.pagination li {
    list-style: none;
    line-height: 50px;
    margin: 0 5px;
    cursor: pointer;
}

.pagination li.pageNumber {
    position: relative;
    top: 5px;
    width: 40px;
    height: 40px;
    line-height: 40px;
    text-align: center;
}

.pagination li a {
    display: block;
    text-decoration: none;
    /*color: #383838;*/
    color:#eb5d1e;
    font-weight: 600;
    border-radius: 50%;
}

.pagination li.pageNumber:hover a,
.pagination li.pageNumber.active a {
    /*background: #383838;*/
    background: #eb5d1e;
    color: #fff;
}

.pagination li:first-child,
.pagination li:last-child{
    margin-right: 10px;
    font-weight: 700;
    font-size: 18px;
}

</style>

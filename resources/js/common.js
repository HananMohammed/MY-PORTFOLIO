export default {
    data() {
        return {

        }
    },
    methods:{
        //async ensures that the function returns a promise
        async callApi(method , url ,data){
            //The keyword await makes JavaScript wait until
            // that promise settles and returns its result
            // works only inside async function.
            return  await axios({
                method: method,
                url: url,
                data: data
            });
        },

    }

}

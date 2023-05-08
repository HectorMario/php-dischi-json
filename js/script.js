const { createApp } = Vue;

  createApp({
    data() {
      return {
        info: [],
        songInfo: {},
        show: false
      }
    },
    mounted() {
        axios.get('http://localhost/boolean/php-dischi-json/server.php').then((resp) => {
            this.info =  resp.data.results   
        })   
    },
    methods: {
        moreInfo(index){
            axios.get('http://localhost/boolean/php-dischi-json/server.php', {params: {song_id : index}}).then((resp) => { 
                this.songInfo =  resp.data.results   
        })      
            this.show = true
        },
        close(){
            this.show =false
        }
    }
  }).mount("#app")
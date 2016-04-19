<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>


    </head>
    <body>
        <div class="container">

           <form method="POST" action="/auctions/3" v-ajax complete="Okay, the post has been deleted.">

                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <button type="submit">Delete post</button>
           </form>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.20/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue-resource/0.6.1/vue-resource.js"></script>

    <script>

      //  Vue.http.headers.common['X-CSRF-TOKEN'] = document.querySelector('input[name="_token"]').value;


        Vue.directive('ajax',{

            params:['complete'],

            bind: function(){
                //console.log(this.params);
                this.el.addEventListener('submit', this.onSubmit.bind(this))
            },



            onSubmit: function(e){
                e.preventDefault();

                this.vm
                    .$http[this.getRequestType()](this.el.action)
                    .then(this.onComplete.bind(this))
                    .catch(this.onError.bind(this));
            },

            onComplete: function(){
                if(this.params.complete){
                    alert(this.params.complete);
                }

            },


            getRequestType: function(){
                var method = this.el.querySelector('input[name= "_method"]');
                return (method ? method.value : this.el.method).toLowerCase();
            },

            onError: function(response){
                console.log(response);

            }


        });
        new Vue({
            el:'body',

            http: {
                headers:{
                    'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value
                }

            }


        });

    </script>

    </body>
</html>

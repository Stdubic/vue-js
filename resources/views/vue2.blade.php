<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>


    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">{{ $test[1] }}</div>
            </div>
        </div>
        <div id="app">


                  <counter subject="Liked"></counter>
                  <counter subject="DisLiked"></counter>
        </div>

        <template id="counter-template">
            <h1>@{{ subject }}</h1>
            <button v-on:click= "count +=1">@{{ count }}</button>
        </template>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.20/vue.js"></script>

    <script>


        new Vue({
            el:'#app',

            components: {
                counter: {
                    template: '#counter-template',

                    props: ['subject'],

                    data: function(){
                        return {count: 0};
                    }
                }

            }

        });

    </script>

    </body>
</html>

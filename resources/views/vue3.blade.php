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


            <h1>Skill: @{{ skill }} </h1>
            <input type="text" v-model="points">





    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.20/vue.js"></script>

    <script>


        new Vue({
            el:'body',

            data: {
                points: 100
            },

            computed: {
                skill: function(){
                    if (this.points <= 100){
                        return 'Beginner';
                    }

                    return 'Advanced';
                }
            }

        });

    </script>

    </body>
</html>

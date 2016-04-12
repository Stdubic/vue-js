<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <style>
            .completed { text-decoration: line-through; }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">{{ $test[1] }}</div>
            </div>

        </div>
        <div id="app">

            <ul>
                <li :class="{ 'completed': task.completed }"
                    v-for="task in tasks"
                    v-on:click= " task.completed = ! task.completed"
                    >
                    @{{ task.body }}
                </li>
            </ul>

        </div>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.20/vue.js"></script>

    <script>


        new Vue({
            el:'#app',

            data: {
                tasks: [
                    { body: 'go to the party', completed: false },
                    { body: 'go to the doctor', completed: false },
                    { body: 'go to the space', completed: true }
                ]
            }


        });

    </script>

    </body>
</html>

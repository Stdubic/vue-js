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
            <tasks :list="tasks"></tasks>
        </div>

                    <template id="tasks-template">
                        <h1>
                        My tasks
                        <span v-show="remaining">(@{{ remaining }})</span>
                        </h1>

                        <ul v-show="list.length">
                            <li :class="{ 'completed': task.completed }"
                                v-for="task in list"
                                v-on:click= " task.completed = ! task.completed"
                                >
                                @{{ task.body }}

                                <strong v-on:click="deleteTask(task)">  x</strong>
                            </li>
                        </ul>

                        <p v-else> No tasks jet !!!</p>

                        <button v-on:click="clearCompleted"> Clear Completed</button>

                    </template>


             <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.20/vue.js"></script>

    <script>

        Vue.component('tasks',{

            props:['list'],

            template:'#tasks-template',

            computed: {
                remaining: function(){

                     var vm = this;
                     return this.list.filter(function(task){
                        return   vm.isInProgress(task);
                    }).length;
                }
            },

            methods: {
                isCompleted: function(task){
                    return task.completed;
                },

                isInProgress: function(task){
                    return ! this.isCompleted(task);
                },

                deleteTask: function(task) {
                    this.list.$remove(task);
                },

                clearCompleted: function(){
                    this.list = this.list.filter(this.isInProgress);
                }
            }
        });

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

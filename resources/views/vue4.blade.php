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

        {{--@{{ $data | json }}--}}


         <div v-for ="plan in plans" >
            <plan :plan="plan" :active.sync="active"></plan>
         </div>


        <template id="plan-template">
            <div>
                <span>@{{ plan.name }}</span>
                <span>@{{ plan.price }}/month</span>
            </div>

            <button v-on:click= "setActivePlan"
                    v-show="plan.name !== active.name"
            >
            @{{ isUpgrade ? 'Upgrade' : 'Downgrade' }}
            </button>

            <span v-else>
                Selected
            </span>
        </template>

        </div>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.20/vue.js"></script>

    <script>


        new Vue({
            el:'#app',

            data: {
                plans: [
                    { name: 'Enterprise', price: 100 },
                    { name: 'Pro', price: 50 },
                    { name: 'Personal', price: 10 },
                    { name: 'Free', price: 0 }
                ],

                active: {}
            },

           components: {
                plan: {
                    template:'#plan-template',

                    props: ['plan', 'active'],

                    computed: {
                        isUpgrade: function(){
                        return this.plan.price > this.active.price;
                        }
                    },

                    methods: {
                        setActivePlan: function(){
                            this.active = this.plan;

                        }
                    }
                }
            }

        });

    </script>

    </body>
</html>

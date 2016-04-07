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
            <h1>@{{ message }}</h1>

            <input v-model="message">

            <pre>
                @{{ $data | json }}
            </pre>

        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.20/vue.min.js"></script>

    <script>
        var data = {

        };

        new Vue({
            el:'#app',
            data: {
                message: 'hello world'
            }
        });

    </script>

    </body>
</html>

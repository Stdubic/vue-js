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

        <form>

                  <span class="error" v-show="!message">
                  You must enter a messag
                  </span>

                        <textarea v-model="message"></textarea>

                  <button type="submit" v-show="message">
                  Send message
                  </button>
        </form>
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
                message: ''
            }
        });

    </script>

    </body>
</html>

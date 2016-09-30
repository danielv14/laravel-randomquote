<template>

  <section class="flex-container flex-button">
    <a href="#" class="quote-link" v-on:click.prevent="getQuote">New quote</a>
  </section>

  <section class="flex-container flex-quote">
    <p>
      {{ body }}
    </p>
  </section>

  <section class="flex-container flex-quote">
    <p>
      By <strong>{{ author }}</strong>
    </p>
  </section>


</template>


<script>
    export default {
        ready() {
            console.log('Component ready.')
            this.getQuote();
        },
        data: function() {
          return {
            author: '',
            body: ''
          }
        },
        methods: {
          getQuote: function() {
            this.$http.get('/api/random').then((response) => {
              console.log(response);
              this.$set('author', response.body.author);
              this.$set('body', response.body.body);

            }, (response) => {
              console.log('error')
            });
          }
        }
    }
</script>

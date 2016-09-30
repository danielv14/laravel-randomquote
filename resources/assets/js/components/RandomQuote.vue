<template>

  <div class="quote-wrapper">


    <section class="flex-container flex-quote">
      <p>
        <span class="author">
          By <strong>{{ author }}.</strong>
        </span>
        <br>
        {{ body }}
      </p>
    </section>

  <section class="flex-container flex-button">
    <a href="#" class="quote-link" @click.prevent="getQuote">New quote</a>
  </section>

  </div>



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
              this.quoteLoaded = true;

            }, (response) => {
              console.log('error')
            });
          }
        }
    }
</script>

<style lang="sass">
  @import '../../sass/variables';
  @import '../../sass/mixins';

  .quote-wrapper {
    background-color: $container-bg;
    @include box-shadow();
    width: 80%;
    margin: 0 auto;
    margin-top: 15px;
    border-radius: 3px;
  }


  .flex-container {
    display: flex;
  }

  .flex-quote {
    align-items: center;
    justify-content: center;

    p {
      width: 70%;
      font-size: 28px;
      line-height: 1.7em;
      color: lighten(black, 60%);
    }
    span.author {
      color: black;
      font-size: 32px;
      letter-spacing: .075em;
      font-family: 'Lalezar', cursive;

    }
  }

  .flex-button {
    justify-content: center;

    a {
      background-color: #67D5B5;
      padding: 15px 75px;
      margin-bottom: 40px;
      border-radius: 4px;
      text-decoration: none;
      color: white;
      font-size: 20px;
      letter-spacing: 0.1em;
      font-family: 'Open Sans Condensed', sans-serif;
      transition: background-color 250ms ease-in-out;
      text-transform: uppercase;

      &:hover {
        background-color: lighten(#67D5B5, 5%);
      }
    }
  }

</style>

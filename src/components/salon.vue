<script lang="ts">
import StarRating from 'vue-star-rating' 
import { ref, computed, defineComponent } from 'vue'

export default defineComponent({
  name: 'App',
  components: {
    StarRating,
  },
  setup() {
    const rating = ref<number | null>(null);

    const currentRatingText = computed<string>(() => {
      return rating.value
        ? `Your Rating is ${rating.value} stars`
        : 'No Rating';
    });
    
    return {
      rating,
      currentRatingText,
    };
  },
});

</script>

<template>
    <h1 class="responsive-text">SEA Salon</h1>
    <h3 style="margin-bottom:15vh">“Beauty and Elegance Redefined”</h3>
    <div class="bg" />

  <div class="services one">
    <p style="font-weight: 200px; font-style:italic; padding:0px">Our Services</p>
    <ul style="font-size: 4.5vh">
      <li>Haircuts and Styling</li>
      <li>Manicure and Pedicure</li>
      <li>Facial Treatments</li>
    </ul>

    <div style="padding-top:5vh; padding-bottom:5vh">
      <p style="font-size: 3vh; padding-left:3vw">Leave a Review!</p>
      <star-rating style="padding-left:6vw; font-size:large":increment="0.5" :max-rating="5" :show-rating="false" :glow="3" glow-color="#ff0000" :rounded-corners="true" :border-width="4" :star-points="[23,2, 14,17, 0,19, 10,34, 7,50, 23,43, 38,50, 36,34, 46,19, 31,17]" :star-size="35" :rating="rating" @update:rating="rating = $event"  />
      <p style="font-size: 3vh; padding-left:0vw">{{ currentRatingText }}</p>
    </div>

    <div>
      <form>
      <label style="font-size: 5vh; padding-left:5vh; padding-right:0vw">Any Comments?</label>
      <input type="text" style="margin-left:5vw; font-size:5vh; margin-right:2vw"></input>
      <button style="margin-top:0vh">Comment!</button>
      </form>
  </div>
  </div>
  <div class="services two">
    <p>Contact Details:</p>
    <table style="margin-left:5vw">
      <tr>
        <td class="num" style="width:8vw">Thomas</td>
        <td class="num">08123456789</td>
      </tr>
      <tr>
        <td class="num">Sekar</td>
        <td class="num">08164829372</td>
      </tr>
    </table>
  </div>

</template>


<style>
body
{
    margin: 0px;
    padding: 0px;
    color-scheme:#2b2b2b;
}

h1{
      
    @media (max-height: 568px) {
      .responsive-text {
        font-size: 12px;
      }
}
}
.bg{
  background-image:url(https://i0.wp.com/salonatthesilk.com/wp-content/uploads/2023/08/salon.jpg?fit=2048%2C1536&ssl=1);
  background-size:cover;
  background-repeat:no-repeat;
  background-position: center;
  height: 100vh;
  width: 98.9vw;
  padding: 0px;
  overflow:hidden;
  object-fit:cover;
}

.services
{
  font-family:'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif; 
  text-align:left;
  padding:0px;
  position:flex;
}
.services p,
.services ul {
    margin: 0;
    margin-left: 5vw;
    padding: 0;
  }

.services.one{
  padding-top:6vh;padding-bottom:6vh;
  font-size:10vh; 
  color:black;
  background-color:white;
}

.services.two{
  font-size:5vh; 
  padding-top: 5vh;
  padding-bottom: 2vh;
}
.services.two .num{
  font-size:2.5vh;
  position:flex;
}
</style>
<template>
    <div class="reviews_card">
        <div class="top_blk">
            <div class="photo">
                <img :src="base_path+'img/person.webp'" alt="">
            </div>
            <div class="person">
                <vue3-star-ratings v-model="reiting" star-size="18" star-color="#FFDE00" inactive-color="lightgray" :disable-click="false" />
                <p>Елена В.</p>
            </div>
        </div>
        <div class="text">Я с удовольствием поделюсь своим положительным опытом посещения стоматологической клиники "Денталика". Уже с момента входа в клинику меня поразила атмосфера комфорта и уюта. </div>
        <div class="platform">Отзыв из Яндекса</div>
    </div>
</template>

<script setup>
import { ref } from 'vue';
import vue3StarRatings from "vue3-star-ratings";

const base_path = window.asset || '';


let reiting = ref(4)

</script>

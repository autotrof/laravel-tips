<template>
    <select v-model="mobil_selected">
        <option v-for="mobil in props.mobils" :value="mobil.id">{{ mobil.merk }}</option>
    </select>
    <div>
        {{ mobil_detail?.roda }}
    </div>
</template>

<script setup>
    import { Link } from '@inertiajs/vue3'
    import { ref, watch } from 'vue'

    const props = defineProps(['mobils'])

    const mobil_selected = ref(null)
    const mobil_detail = ref(null)

    watch(mobil_selected, (new_value) => {
        axios(`/mobil/${new_value}`)
        .then(response => {
            mobil_detail.value = response.data
            console.log(response.data)
        })
    })
</script>

<template>
  <currency-input
    v-model="number"
    :distraction-free="false"
    :locale="field.meta.locale"
    :currency="field.meta.currency"
    class="bg-transparent"
    readonly
  />
</template>

<script>
import { CurrencyInput } from 'vue-currency-input'

export default {
  props: [
    'value',
    'field',
    'model',
    'package',
    'action'
  ],

  components: {
    CurrencyInput
  },

  computed: {
    number () {
      return parseFloat(this.value)
    }
  }
}
</script>

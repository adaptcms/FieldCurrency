<template>
  <input
    ref="inputRef"
    :value="formattedValue"
  >
</template>

<script>
import useCurrencyInput from 'vue-currency-input'

export default {
  name: 'CurrencyInput',
  props: {
    modelValue: Number,
    options: Object
  },

  // emits: [
  //   'update:modelValue'
  // ],

  // methods: {
  //   update ($event, value) {
  //     console.log(`update -> ${this.modelValue}`)
  //   }
  // },

  setup (props) {
    const { formattedValue, inputRef } = useCurrencyInput(props.options)

    return { inputRef, formattedValue }
  }
}
</script>

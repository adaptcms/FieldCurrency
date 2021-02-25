<template>
  <currency-input
    :id="`form-${field.column_name}`"
    class="text-base py-3 px-3 shadow-sm block mt-1 border w-full"
    v-model="selected"
    :class="{ 'border-red-500': errors[field.column_name].is, 'border-gray-300': !errors[field.column_name].is }"
    :distraction-free="distractionFreeOptions"
    :locale="field.meta.locale"
    :currency="field.meta.currency"
  />
</template>

<script>
import { CurrencyInput } from 'vue-currency-input'

export default {
  props: [
    'value',
    'field',
    'errors',
    'formMeta',
    'model',
    'action'
  ],

  components: {
    CurrencyInput
  },

  watch: {
    value (newVal, oldVal) {
      if (newVal !== oldVal) {
        this.selected = parseFloat(newVal)
      }
    },

    selected (newVal, oldVal) {
      if (newVal !== oldVal) {
        this.$emit('input', newVal)
      }
    }
  },

  data () {
    return {
      selected: null,
      distractionFreeOptions: {
        hideNegligibleDecimalDigits: true,
        hideGroupingSymbol: true,
        hideCurrencySymbol: false
      }
    }
  },

  mounted () {
    if (!this.selected) {
      this.selected = parseFloat(this.value)
    }
  }
}
</script>

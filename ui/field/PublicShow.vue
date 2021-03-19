<template>
  <currency-input
    v-if="field.meta && field.meta.currency"
    v-model="number"
    :options="options"
    class="bg-transparent"
    readonly
  />
</template>

<script>
import CurrencyInput from '@/Adaptcms/FieldCurrency/ui/components/CurrencyInput'

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
    },

    options () {
      let options = {}
      if (this.field.meta) {
        options.currency = this.field.meta.currency
        options.locale = this.field.meta.locale
        options.distractionFree = false
      }

      return options
    }
  },

  mounted () {
    if (!this.field.meta) {
      this.field.meta = {
        currency: 'USD',
        locale: 'en-US'
      }
    }
  }
}
</script>

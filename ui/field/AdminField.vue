<template>
  <currency-input
    v-if="isLoaded && field.meta && field.meta.currency"
    :id="`form-${field.column_name}`"
    class="text-base py-3 px-3 shadow-sm block mt-1 border w-full"
    v-model="selected"
    :class="{ 'border-red-500': errors[field.column_name].is, 'border-gray-300': !errors[field.column_name].is }"
    :options="options"
  />
</template>

<script>
import CurrencyInput from '@/Adaptcms/FieldCurrency/ui/components/CurrencyInput'

export default {
  props: [
    'modelValue',
    'field',
    'errors',
    'formMeta',
    'model',
    'action'
  ],

  emits: [
    'update:modelValue'
  ],

  components: {
    CurrencyInput
  },

  watch: {
    modelValue (newVal, oldVal) {
      if (newVal && newVal !== oldVal) {
        this.selected = newVal
      }
    },

    selected (newVal, oldVal) {
      if (newVal !== oldVal) {
        console.log(`update:modelValue -> ${newVal}`)
        this.$emit('update:modelValue', newVal)
      }
    }
  },

  computed: {
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

  data () {
    return {
      selected: null,
      isLoaded: false
    }
  },

  methods: {
    change ($event, value) {
      console.log($event)
      console.log(value)
      console.log('---')
    }
  },

  mounted () {
    if (!this.selected) {
      this.selected = this.modelValue
    }

    if (!this.field.meta) {
      this.field.meta = {
        currency: 'USD',
        locale: 'en-US'
      }
    }

    this.isLoaded = true
  }
}
</script>

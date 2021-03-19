<template>
  <div class="flex-col">
    <div class="w-full mb-2">
      <label for="form-locale" class="text-lg font-normal text-gray-700 w-auto">
        Locale
      </label>

      <SelectField
        id="form-locale"
        :errors="errors"
        v-model="selected.locale"
      >
        <template v-slot:options>
          <option
            v-for="locale in localeOptions"
            :key="`locale-${locale}`"
            :value="locale"
          >
            {{ locale }}
          </option>
        </template>
      </SelectField>
    </div>

    <div class="w-full mb-2">
      <label for="form-currency" class="text-lg font-normal text-gray-700 w-auto">
        Currency
      </label>

      <SelectField
        id="form-currency"
        :errors="errors"
        v-model="selected.currency"
      >
        <template v-slot:options>
          <option
            v-for="currency in currencyOptions"
            :key="`currency-${currency}`"
            :value="currency"
          >
            {{ currency }}
          </option>
        </template>
      </SelectField>
    </div>

    <template v-if="errorsList.length">
      <span v-for="error in errorsList" :key="error" class="border-red-700 block px-2 py-2 text-sm text-red-100 bg-red-500">
        {{ error }}
      </span>
    </template>
  </div>
</template>

<script>
import { get, isEmpty } from 'lodash'
import SelectField from '@/Adaptcms/Base/ui/components/Form/SelectField'

export default {
  props: [
    'modelValue',
    'field',
    'package',
    'errors',
    'fields'
  ],

  emits: [
    'update:modelValue'
  ],

  components: {
    SelectField
  },

  watch: {
    modelValue (newVal, oldVal) {
      if (newVal !== oldVal) {
        this.selected = newVal
      }
    },

    selected: {
      handler: function (newVal, oldVal) {
        this.$emit('update:modelValue', newVal)
      },
      deep: true
    }
  },

  computed: {
    errorsList () {
      let key = 'meta.options'

      return (typeof this.errors[key] !== 'undefined' ? this.errors[key].messages : [])
    }
  },

  data () {
    return {
      selected: {
        locale: 'en-US',
        currency: 'USD'
      },
      localeOptions: [
        'en-US',
        'de-DE',
        'de-CH',
        'en-IN',
        'nl-NL',
        'sv-SE',
        'fr-FR',
        'es-ES',
        'pt-PT',
        'zh-ZH',
        'ja-JP',
        'ar-SA',
        'fa-IR'
      ],
      currencyOptions: [
        'USD',
        'EUR',
        'JPY',
        'GBP',
        'BRL',
        'INR',
        'CNY',
        'SAR',
        'IRR'
      ]
    }
  },

  mounted () {
    if (!isEmpty(this.modelValue)) {
      this.selected = this.modelValue
    } else {
      this.$emit('update:modelValue', this.selected)
    }
  }
}
</script>

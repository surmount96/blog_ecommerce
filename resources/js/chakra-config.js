const chakraConfig = {
    /**
  * Extends the Chakra theme object with the values
  * provided in this option. Chakra UI recursively merges this
  * theme object and will overwrite defaults with extended theme
  * values.
  * 
  * @see
  * - Theme specification - https://theme-ui.com/theme-spec/
  * - Example:
  *  https://vue.chakra-ui.com/extending-theme#extending-theme-object
  */
  extendTheme: {
    orange: {
        50: '#fff6da',
        100: '#ffe4ad',
        200: '#ffd27d',
        300: '#ffc04b',
        400: '#ffae1a',
        500: '#e69500',
        600: '#b37300',
        700: '#815300',
        800: '#4e3200',
        900: '#1e1000',
      }
  },
  /**
   * Enables extension of icons inside the Chakra app.
   * Currently it only supports FontAwesome icons.
   * 
   * @see
   *  - Icons: https://vue.chakra-ui.com/icon
   */
  icons: {
    /**
     * The pack of the icons being used.
     * This defaults to FontAwesome (fa).
    */
    iconPack: 'fa',
    /**
     *The object of icon paths to be consumed.
     * For example:
     *  - faArrowUp
     *  - faArrowDown 
    */
    iconSet: {},
    /**
     * Custom SVG paths that can be added to the
     * Chakra application and can be accessed by Chakra.
     * Chakra defaults all SVG icon paths 'viewBox' to `0 0 24 24`.
     * 
     * e.g.
     * extend: {
     *    github: {
     *       path: `<path ...> </path>`,
     *        viewbox: `0 0 24 24` 
     *    }
     * }
     * 
     * @see
     *  - Icons: https://vue.chakra-ui.com/icon
    */
    extend: {},
  }
};

export default chakraConfig;
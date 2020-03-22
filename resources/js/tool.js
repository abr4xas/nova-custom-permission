Nova.booting((Vue, router, store) => {
  router.addRoutes([
    {
      name: 'nova-custom-permission',
      path: '/nova-custom-permission',
      component: require('./components/Tool'),
    },
  ])
})

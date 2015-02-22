# MobWeb_ForceError extension for Magento

A simple extension for Magento that allows you to create different kinds of errors by going to a specific URL. This is useful to debug error handling on a new server.

The following URLs are available:

**Frontend**:

- http://example.com/forceerror/frontendmagentoexception/
- http://example.com/forceerror/frontendphpnotice/
- http://example.com/forceerror/frontendphpfatalerror/

**Backend**:

- http://example.com/admin/backendmagentoexception/
- http://example.com/admin/backendphpnotice/
- http://example.com/admin/backendphpfatalerror/

Notice: You might have to turn off *Add Secret Key to URLs* in your configuration to be able to access the backend URLs directly without providing a key with the request.

## Installation

Install using [colinmollenhour/modman](https://github.com/colinmollenhour/modman/).

## Questions? Need help?

Most of my repositories posted here are projects created for customization requests for clients, so they probably aren't very well documented and the code isn't always 100% flexible. If you have a question or are confused about how something is supposed to work, feel free to get in touch and I'll try and help: [info@mobweb.ch](mailto:info@mobweb.ch).
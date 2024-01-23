const axios = require('axios');
const baseURL = document.querySelector('meta[name="base_url"]').content;
const csrf = document.querySelector('meta[name="csrf-token"]').content;
const instance = axios.create({
    baseURL: baseURL,
    headers: {
        'X-Requested-With' : 'XMLHttpRequest',
        'Content-Type': 'application/json',
        'X-CSRF-TOKEN': csrf,
      }
});
const instanceMulti = axios.create({
    baseURL: baseURL,
    headers: {
        'Content-Type': 'multipart/form-data',
        'X-CSRF-TOKEN': csrf,
      }
});
const instanceGoogle = axios.create({
    baseURL: 'https://www.googleapis.com/youtube/v3/videos',
    headers: {
        'X-Requested-With' : 'XMLHttpRequest',
        'Content-Type': 'application/json',
      }
});
window.axios = instance;
window.axiosFrom = instanceMulti;
window.axiosgoogle = instanceGoogle;

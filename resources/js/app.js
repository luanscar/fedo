import './bootstrap';

import Alpine from 'alpinejs';
import Autosize from '@marcreichel/alpine-autosize';

window.Alpine = Alpine;
Alpine.plugin(Autosize);
Alpine.start();

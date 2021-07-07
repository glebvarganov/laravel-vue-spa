import Logo from './components/Logo';
import LogoSymbol from './components/LogoSymbol';
import Colors from './components/Colors';
import Typography from './components/Typography';
import Mascot from './components/Mascot';
import Illustrations from './components/Illustrations';
import Wallpapers from './components/Wallpapers';
import NotFound from './components/NotFound';
import SiteStats from './components/SiteStats';
import Achievements from './components/Achievements';

let LoadersAndAnimations = () => import('./components/LoadersAndAnimations');

export default {
    mode: 'history',
    linkActiveClass: 'font-bold',
    routes: [
        {
            path: '*',
            component: NotFound
        },
        {
            path: '/',
            name: 'logo',
            component: Logo
        },
        {
            path: '/logo-symbol',
            name: 'logo-symbol',
            component: LogoSymbol
        },
        {
            path: '/colors',
            name: 'colors',
            component: Colors
        },
        {
            path: '/typography',
            name: 'typography',
            component: Typography
        },
        {
            path: '/mascot',
            name: 'mascot',
            component: Mascot
        },
        {
            path: '/illustrations',
            name: 'illustrations',
            component: Illustrations
        },
        {
            path: '/loaders-and-animations',
            name: 'loaders-and-animations',
            component: LoadersAndAnimations
        },
        {
            path: '/wallpapers',
            name: 'wallpapers',
            component: Wallpapers
        },
        {
            path: '/site-stats',
            name: 'site-stats',
            component: SiteStats
        },
        {
            path: '/your-achievements',
            name: 'your-achievements',
            component: Achievements
        },
    ]
}

import gulp from 'gulp';
import { buildScripts, buildStyles } from './loco_build/build.js';
import copy from './loco_build/copy.js';
import scripts from './loco_build/scripts.js';
import serve from './loco_build/serve.js';
import styles from './loco_build/styles.js';
import svgs from './loco_build/svgs.js';
import watch from './loco_build/watch.js';

const compile = gulp.series(styles, scripts, svgs);
const main = gulp.series(copy, compile, serve, watch);
const build = gulp.series(copy, compile, buildStyles, buildScripts);

gulp.task('default', main);
gulp.task('compile', compile);
gulp.task('build', build);
gulp.task('copy', copy);

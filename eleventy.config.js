import { DateTime } from 'luxon'
import { eleventyImageTransformPlugin } from '@11ty/eleventy-img'

/**
 * @param eleventyConfig
 */
export default function (eleventyConfig) {
  eleventyConfig.addPlugin(eleventyImageTransformPlugin)

  eleventyConfig.addPassthroughCopy('src/assets')

  eleventyConfig.addFilter('limit', (array, limit) => array.slice(0, limit))
  eleventyConfig.addFilter('date', (date) => DateTime.fromISO(date.toISOString())
    .setZone('Asia/Seoul').toFormat('yyyy년 LL월 dd일 HH시 mm분'))
  eleventyConfig.addFilter('yearMonth', (date) => DateTime.fromISO(date.toISOString())
    .setZone('Asia/Seoul').toFormat('yyyy년 LL월'))
}
